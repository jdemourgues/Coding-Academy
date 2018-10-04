/*
** ex_03.c for ex_03.c in /home/jerome/rendu/pool_c_d04/ex_03
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct  5 15:29:14 2017 demourgues
** Last update Thu Oct  5 16:04:49 2017 demourgues
*/

#include <stdio.h>

int	my_strlen(char *str)
{
  int i;
  
  i = 0;
  while (str[i] != '\0')
    {
      ++i;
    }
  return(i);
}

/*int	main()
{
  return (my_strlen("Geckos"));
}
*/
