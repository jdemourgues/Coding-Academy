/*
** ex_07.c for my_reset_ptr in /home/jerome/rendu/pool_c_d06/ex_07
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Mon Oct  9 19:05:23 2017 demourgues
** Last update Mon Oct  9 20:15:39 2017 demourgues
*/
#include <stdio.h>
#include <stdlib.h>

void my_reset_ptr(char **str)
{
  free (*str);
  *str = NULL;
}


/*int	main()
{
  char	*str;

  //  *str = str[0]
  
  str = malloc(42);
  my_reset_ptr(&str); // char **
  printf("%p\n", str); // doit afficher (nil)  
}
*/
