# Résumé des commandes Git et GitHub
## Création d'un dépôt local
- Dans Visual Code, sélectionner le dossier du **thème** et avec le bouton de
  droite de la souris, on sélectionne **Open in integrated terminal**
- git init (on exécute une seule fois cette commande. Permet de créer le dossier
  **.git**)
- git status
- git add . ou git add --all
- git commit -m "S2C1 - On décrit les modifications"
- git log
- git log --oneline
- git remote add 4w4 https://github.com/xshujo/example.git
- git branch -m main (change le nom de la branche)
- git branch Lab1 (crée la branche Lab1)
- git checkout Lab1 (pour changer de branche vers Lab1)
- git log --oneline (les branches Lab1 et main pointent vers le même commit)
- git checkout main
- git push 4w4 main (pousse la branche active main vers GitHub dans le dépôt 4w4
  vers la branche main)
- git checkout Lab1
- git push 4w4 Lab1
- git branch Lab2
- git checkout Lab2
- git push 4w4 Lab2 (pousse la branche active Lab2 vers 4w4 dans la branche Lab2)