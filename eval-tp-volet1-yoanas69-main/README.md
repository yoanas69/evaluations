[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/lXT4ha2I)
# TP/Volet 1 : Intégration de données `JSON` et affichage dynamique en `PHP`.
## Travail individuel (délai de remise spécifié sur Omnivox).

## Objectif/exigences généraux
* Intégrer des données `JSON` avec `PHP`
* Produire le contenu `HTML` dynamiquement avec `PHP` 
* Formater l'affichage `HTML` avec `CSS` 

## Étapes à suivre
1. *Clonez* ce dépôt sur votre machine locale à l'endroit approprié

2. Testez le site web contenu dans ce dépôt sur votre serveur Web avant de commencer le travail

3. Notez tout d'abord que le menu de navigation principale ne fonctionne pas correctement lorsqu'on visite les pages *casquettes* ou *hoodies* : ces items ne sont pas surlignés dans le menu (comme c'est le cas pour *teeshirts*). Corrigez ce défaut en ajoutant le code PHP aux endroits adéquats

4. Complétez aussi l'externalisation des textes pour les deux pages *en construction* fournies : `casquettes.php` et `hoodies.php`. Faites bien attention de placer les textes dans les sections adéquates des fichiers de langue `fr.json` et `en.json`

5. Maintenant, produisez deux *traductions additionnelles* du site, dans les langues que vous souhaitez (attention de nommer les fichiers de textes correctement, c'est à dire avec le code de chaque langue à deux lettres suivant le standard ISO, comme montré en classe. Sinon, vous perdez tout simplement vos points 🤷)

6. Modifiez le fichier `CSS` pour ajouter à l'endroit approprié les règles de styles requises pour que l'affichage de la page *teeshirts* ressemble le plus fidèlement possible aux captures d'écrans jointes au bas de cette page (un exemple de solution sera aussi montré en classe)

7. Créez un dossier `data` à la racine du site et mettez-y un fichier `JSON` nommé `teeshirts.json` pour structurer l'information simple sur les teeshirts (en français uniquement pour ce TP) que vous trouverez dans le document suivant : https://docs.google.com/spreadsheets/d/1-NvHoupOL3U_tAZMnkAfwvIItdpZehWzbfJsoArQdQA/edit?usp=sharing

> Pour ce premier travail, nous voulons une structure extrêmement simple : un unique *tableau* contenant des *objets*, chaque *objet* représentant un teeshirt avec les propriétés suivantes (**ignorez** les autres colonnes du fichier *Google Sheets*) : 

        a.  Identifiant (chaîne de caractères) : utilisez l'étiquette "id"
        b.  Nom (chaîne de caractères) : utilisez l'étiquette "nom"
        c.  Prix (nombre décimal) : utilisez l'étiquette "prix"

8. Dans le fichier `teeshirts.php`, à l'endroit approprié, intégrez le fichier `JSON` pour obtenir un tableau `PHP` contenant l'information sur les teeshirts

9. Dans le même fichier, ajoutez le code `PHP` pour faire l'affichage dynamique des teeshirts dans le format spécifié par le gabarit donné : attention de ne rien changer au gabarit et de respecter la structure du code `HTML` **à la lettre**

10. Testez votre solution ! Faites la remise finale sur `GitHub` en synchronisant vos dépôts local et distant une dernière fois.

### Gardez une copie personnelle de votre travail : les dépôts de remises sur `582-3W3` seront supprimés une fois les notes publiées.

## Captures d'écran

* Page *teeshirts* - `Ordinateur de bureau`
<img src="/_captures/teeshirts-bureau.png" alt="Teeshirts - bureau" title="Teeshirts - bureau" />

* Page *teeshirts* - `Appareil mobile`
<img src="/_captures/teeshirts-mobile.png" alt="Teeshirts - mobile" title="Teeshirts - mobile" />