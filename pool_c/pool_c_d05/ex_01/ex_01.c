/*
** ex_01.c for ex_01.c in /home/jerome/rendu/pool_c_d05/ex_01
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Fri Oct  6 09:21:44 2017 demourgues
** Last update Fri Oct  6 11:31:13 2017 demourgues
*/
#include <stdio.h>

int	array_sum(int	*tab, int size)
{
  int cpt = 0;
  int res = 0;

  while (cpt < size)
    {
	 res = res + tab[cpt];
	 ++cpt;
    }
  return(res);
}
/*
int	main()
{
  int	tab[3] = {3, 4, 5};

  printf("%d\n", array_sum(tab, 3));
  return (0);
}
*/
