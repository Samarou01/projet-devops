# Projet DevOps – Déploiement automatisé

## Description
Ce projet utilise Ansible pour automatiser l’installation et la configuration d’un serveur web nginx.

## Technologies
- Linux (Ubuntu)
- Ansible
- Nginx

## Fonctionnalités
- Installation automatique de nginx
- Déploiement d’une page web personnalisée
- Configuration automatisée du serveur

## Lancer le projet
```bash
ansible-playbook -i hosts install_nginx.yml --ask-become-pass
