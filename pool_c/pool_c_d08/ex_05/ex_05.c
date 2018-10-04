/*
** ex_05.c for my_power_it in /home/jerome/rendu/pool_c_d08/ex_05
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Wed Oct 11 19:33:24 2017 demourgues
** Last update Wed Oct 11 20:15:20 2017 demourgues
*/
#include <stdio.h>

int	my_power_it(int i, int j)
{
  int res = 1;

  if (j != 0)
    {
      while (j > 0)
      {
        res = res * i;
        j--;
      };
    }  
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
