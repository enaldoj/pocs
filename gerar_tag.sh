#!/bin/bash
set -e

REPO_NAME="poc-github"
REGION="us-east-1"

echo "🔍 Buscando última tag válida no ECR ($REPO_NAME em $REGION)..."

# Lista todas as tags válidas (vX.Y.Z) e pega a mais recente
TAGS=$(aws ecr describe-images \
  --repository-name "$REPO_NAME" \
  --region "$REGION" \
  --query 'imageDetails[].imageTags' \
  --output json | jq -r '.[]? | .[]? | select(test("^v[0-9]+\\.[0-9]+\\.[0-9]+$"))' | sort -V || true)

# Se não existir nenhuma tag, define v0.0.1
if [ -z "$TAGS" ]; then
  echo "⚠️ Nenhuma tag encontrada — iniciando em v0.0.1"
  NEW_TAG="v0.0.1"
else
  LAST_TAG=$(echo "$TAGS" | tail -n 1)
  echo "✅ Última tag encontrada: $LAST_TAG"

  PREFIX="v"
  VERSION=${LAST_TAG#$PREFIX}
  IFS='.' read -r MAJOR MINOR PATCH <<< "$VERSION"
  PATCH=$((PATCH+1))
  NEW_TAG="${PREFIX}${MAJOR}.${MINOR}.${PATCH}"
fi

echo "🚀 Nova tag gerada: $NEW_TAG"
export NEW_TAG

