function auto_numbering()
{
      var i = 0;
      var rules = document.getElementsByClassName('rule-number');

      var counter = 0;

      for(i = 0; i < rules.length; i++)
      {
            counter = counter + 1;

            rules[i].innerHTML = counter;
      }

}

auto_numbering();