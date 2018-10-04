/*
** ex_03.c for my_up.c in /home/jerome/rendu/pool_c_d06/ex_03
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Mon Oct  9 13:03:54 2017 demourgues
** Last update Mon Oct  9 17:08:36 2017 demourgues
*/
#include  <stdlib.h>

int *my_up(int i)
{
  int * tab;
  tab = malloc(sizeof(int)*2);
  tab[0] = i;
  tab[1] = 2 * i;
  return(tab);   
}

/*int	main()
{
  return(0);
}
*/
