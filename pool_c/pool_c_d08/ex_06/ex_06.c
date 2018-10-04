/*
** ex_06.c for my_power_rec in /home/jerome/rendu/pool_c_d08/ex_05
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Wed Oct 11 19:33:24 2017 demourgues
** Last update Wed Oct 11 20:53:05 2017 demourgues
*/
#include <stdio.h>

int	my_power(int i, int j, int k, int res)
{
  if (k < j)
    {
      res = res * j;
      k++;
      res = my_power(i, j, k, res);
    }
  return (res);
}

int	my_power_rec(int i, int j)
{
  int k = 0;
  int res = 1;
  res = my_power(i, j, k, res);
  return(res);
}

/*int	main()
{
  int i = 2;
  int j = 5;
  int res;

  res = my_power_it(i, j);
  printf("%d\n", res);
return(0);
}
*/		    
