# <p align="center"> _Dossier de développement_ <br/> <ins> Projet Econtact avec Symfony </ins> </p>
### <p align="center"> Complément web </p>

### <center>Groupe 203 / 204</center>

Par <br/>
Etienne Kita<br/>
Steven Tea<br/>

<hr/>

<h2>Installation<h2>

Comme le nom l'indique, ce projet fonctionne sous symfony, après l'avoir cloné, cette commande est nécessaire *(dans le terminal du serveur, Ex: Laragon)*
```
composer install
```


<h2>Technologies utilisées</h2>
<ul>
<li>Doctrine avec migration</li>
<li>Form avec buildForm</li>
</ul>

<h2>Modifications depuis le passage en classe</h2>
<ul>
<li>Ajout d'un bouton de déconnexion</li>
<li>Ajout de fonctions sans les repo Contact et Utilisateur pour simplifier et apporter une meilleure séparation du code</li>
<li>Redirection de accueil vers login si la session est vide</li>
</ul>


