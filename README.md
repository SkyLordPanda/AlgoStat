# Projet AlgoStat

**Objectifs :**
> Réaliser une série de tris.
> Évaluer leur efficacité.
> Analyser différents algorithmes de tri afin d'identifier l'algorithme le plus optimal à la situation à traiter.
> Distinguer les différences de fonctionnement entre les algorithmes de tri.

 
**Voici la liste des algorithmes :**
>* tri par insertion (insertion_sort)
>* tri par sélection (selection_sort)
>* tri à bulle (bubble_sort)
>* tri shell (shell_sort)
>* tri fusion (merge_sort)
>* tri rapide (quick_sort)
>* tri peigne (comb_sort)

**Comment lancer notre programe :**
Tous d'abord il vous faut php (le dernier de préférence) ici : [php](https://www.php.net/downloads.php)
une fois installer lancer un de nos programe comme ceci : php nom_du_programe.php "<un_nombre>;<un_deuxième_nombre>;<un_troisième_nombre>;<etc>"
```sh
$> php insertion_sort.php "1;-2;3.5;4"
```

la suite logique au lancement du programme est :

```
$> php insertion_sort.php "1;-2;3.5;4"
Série : 1;-2;4;3.5;3
Résultat : -2;1;3;3.5;4
Nb de comparaison : 24
Nb d'itération : 25
Temps (sec) : 2.05
$>
```
* * *

# Explications des tris

###### ___________________________________________________________

## tri par insertion (insertion_sort):
Ce tri commence tout d'abord par comparer le premier élément de la liste à son deuxième pour les trier en parcourant la liste pas à pas.

### La complexité:
Dans le meilleur des cas, on obtient [Θ(n)], on est donc en complexité linéaire.
> Exemple : Dans le cas d'une liste dont les éléments sont triés en ordre croissant.

Dans le pire des cas, on obtient [Θ(n^2)], on  est donc en complexité  quadratique.
> Exemple : Dans le cas d'une liste dont les éléments sont triés en ordre décroissant.
###### ___________________________________________________________

## tri par sélection (selection_sort):
Ce tri consiste à trouver la valeur minimale de la liste à trier, puis de la placer au début. Ensuite on fait la même démarche mais sur la sous-liste excluant le minimum de la liste qu'on a précédemment traité. On continue ce processus jusqu'à on arrive à la fin de la liste.

### La complexité:
L'algorithme effectuera n(n-1)/2 opérations dans tous les cas, donc il est en complexité Θ(n2).
###### ___________________________________________________________

## tri à bulles (bubble_sort):
Ce tri consiste à comparer deux éléments de la liste en commençant tout à gauche de cette même liste. Il effectue une permutation si un élément est plus grand que le second. Le tri continuera jusqu'à ne plus avoir de permutations.

### La complexité:
Dans le meilleur des cas, on effectue une complexité linéaire [O(n)].
Dans le pire des cas, on effectue une complexité quadratique [O(n^2)].
###### ___________________________________________________________

## tri shell (shell_sort):
Ce tri consiste a répartire notre liste par pas (qui est calculée en fonction de la longueur de notre liste), pour pouvoir diviser par deux ces sous-listes dans le but de les trier, une fois trié on compare les sous-listes entre elles pour les trier.

### La complexité:
Le tri de Shell dépend de la suite d'incréments retenue.
Dans le meilleur des cas on obtient [O(n log n)].
Dans le pire des cas on obtient [O(n^2)]
###### ___________________________________________________________

## tri par fusion (merge_sort):
On sélectionne toute la liste, puis la divise en deux, et ensuite sélectionne la sous-liste de gauche et on répète ce processus jusqu'au moment où l'on obtient deux sous-listes de taille 1. Puis on fusionne les deux moitiés obtenues pour reconstituer la liste triée.

### La complexité:
Dans tous les cas la complexité du tri par fusion est en (n log n).
###### ___________________________________________________________

## tri rapide (quick_sort):
Cette méthode consiste à sélectionner un pivot et de placer les éléments qui y sont inférieurs aux éléments de gauche, et les éléments qui y sont supérieurs à son droit. Ensuite on divise la liste du départ en deux, celle qui est à gauche et celle qui est à droite, et d'effectuer le même parcours que nous avons fait.

### La complexité:
Dans le pire des cas, quand on choisit soit le plus grand soit le plus petit élément de la liste à trier, la complexité du tri rapide est en Θ(n2). Dans le meilleur des cas, quand on choisit l'élément du milieu de la liste à trier, la complexité est en [Θ(n log n)].
###### ___________________________________________________________

## tri à peigne (comb_sort):
Ce tri consiste à définir un pas large dans une liste pour trier les deux pas à incrémentation puis à réduire le pas à chaque passage jusqu'à obtenir une liste triée.

### La complexité:
Dans le meilleur des cas le tri est linéarithmique [Θ(n log n)].
Dans le pire des cas elle est quadratique [Θ(n^2)].
