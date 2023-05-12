#!/bin/bash

# Vérifier si Docker est déjà installé
if ! [ -x "$(command -v docker)" ]; then
    # Installer Docker
    echo "Installation de Docker..."
    curl -fsSL https://get.docker.com -o get-docker.sh
    sudo sh get-docker.sh

    # Ajouter l'utilisateur actuel au groupe "docker" pour exécuter Docker sans sudo
    sudo usermod -aG docker $USER

    # Redémarrer le service Docker
    sudo systemctl restart docker

    # Vérifier l'installation de Docker
    docker --version

    # Vérifier l'exécution de Docker sans sudo
    docker run hello-world
else
    echo "Docker est déjà installé."
fi
