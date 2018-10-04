/*
** ex_05.c for my_show_str in /home/jerome/rendu/pool_c_d06/ex_05
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Mon Oct  9 16:06:09 2017 demourgues
** Last update Mon Oct  9 16:43:19 2017 demourgues
*/

#include  <stdlib.h>
#include <unistd.h>

void my_putchar(char a)
{
  write(1, &a, 1);
}

void my_putstr(char *str)
{
  int i;
  
  i = 0;
  while (str[i] != '\0')
    {
      my_putchar(str[i]);
      i++;
    }
}

void my_show_str(char **tab)
{
  int cpt;

  cpt = 0;
  while (tab[cpt])
  {
    my_putstr(tab[cpt]) ;
    my_putchar('\n') ;
    cpt = cpt + 1;
  }
}

/*int main ()
{
  char	*tab[] = {
    "hello" ,
    "students" ,
    NULL
  };

  my_show_str(tab);
  return(0);
}
*/
