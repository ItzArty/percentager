# Percentager
Percentager is PHP script that makes you able to give strings a percentage weight like Common: 50%, Uncommon: 25%..., and with the percentage weight can choose one by its percentage rarity

# How to use Percentager

• Download percentager.php

• Create a file and require/include percentager.php

• To make "lottery" (select random string by its rarity) use function randomSelect()

• randomSelect() usage:

  » randomSelect() does only have one slot for data which should be filled like this: randomSelect("1:50, 2:50");
  
  » to define string and its rarity you have to do this: first part is string name and the second (the one after :) is its rarity
  
  » WARNING: All strings have to have unicate name, and the sum of all of them needs everytime to be 100 and not higher or lower
  
