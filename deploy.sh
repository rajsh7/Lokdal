#!/usr/bin/env bash
set -e

echo "==========================================="
echo "   Lokdal Auto-Deploy & Sync Script        "
echo "==========================================="

REPO_DIR="/var/www/html"
cd "$REPO_DIR"

# 1. Mark directory as safe in git
git config --global --add safe.directory "$REPO_DIR"
sudo git config --global --add safe.directory "$REPO_DIR"

# 2. Backup or discard any untracked or local conflicts safely
echo "--> Stashing any local changes..."
sudo git stash

# 3. Pull latest changes from master
echo "--> Pulling latest code from GitHub..."
sudo git fetch origin master
sudo git reset --hard origin/master

# 4. Set correct Apache permissions
echo "--> Setting permissions for www-data..."
sudo chown -R www-data:www-data "$REPO_DIR"
sudo chmod -R 755 "$REPO_DIR"

# 5. Check if Docker container is running and restart/reload
if command -v docker &> /dev/null && [ -f "$REPO_DIR/docker-compose.yml" ]; then
    if sudo docker ps --format '{{.Names}}' | grep -q 'lokdal_web'; then
        echo "--> Restarting Lokdal Docker container..."
        sudo docker compose restart
    fi
fi

echo "==========================================="
echo "   Lokdal Deployment Completed Successfully! "
echo "==========================================="
