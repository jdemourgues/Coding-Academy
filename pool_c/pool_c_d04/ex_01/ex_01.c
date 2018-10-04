/*
** ex_02.c for ex_01.c in /home/jerome/rendu/pool_c_d04/ex_02
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct  5 11:22:59 2017 demourgues
** Last update Thu Oct  5 12:00:21 2017 demourgues
*/
#include <stdio.h>

void	my_swap(int *adr1, int *adr2)
{
  int nb3;
  nb3 = *adr1;
  *adr1 = *adr2;
  *adr2 = nb3;
}

/*int	main ()
{
  int	nb1 = 42;
  int	nb2 = 24;

  printf("%d - %d\n", nb1, nb2);
  my_swap(&nb1, &nb2);
  printf("%d - %d\n", nb1, nb2);
  return(0);
}
*/
