# PHP Basic

In the php-basic folder

```php
docker run -d -p 3000:80 --name php-basic-container -v "$PWD":/var/www/html php:7.0-apache
```

## Array manipulation

Make an array without keys

Make an array with keys

Symbolise 15 recipes in an array ( one recipe has title, content, ingredients, specifications ( duration, Qty person, price)

print one duration of the second recipe

print all title

print price of all recipes

sum price of all recipes

sum price of recipes that long less than 30min

make a function to sum all prices

make a function can sort the recipe array by price

get the less expensive recipe

get the recipe with the maximum of ingredients

## Form

Look in the directory ```php-basic```

You have ```index.php```, ```view.php```, ```add.php```, ```edit.php```, ```about.php```.
If you look in the includes folder, you'll see ```header.inc.php``` and ```footer.inc```

### Instructions

* Make the project more fancy by adding css style.
* Make a menu to easily navigate between the different page (index, about)
* Display a nice table of recipes on index page: display only title of recipe, the first 30 char of content, the duration, the price, qty_people
* Make a function to display more easily the price
* Display recipe in view page (localhost:3000/view.php?r=1 where 1 is the index key in the recipes array) + display title, content, duration, price, qty_people, ingredients
* Make a function to display more easily an ingredient with the symbol and the qty
* Display a form in add page
* Make stuff to submit the form
* Hi me and I'll inspect your code :)

#### Good job