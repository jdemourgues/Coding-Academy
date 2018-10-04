/*
** ex_04.c for my_init in /home/jerome/rendu/pool_c_d08/ex_02
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Wed Oct 11 14:29:13 2017 demourgues
** Last update Wed Oct 11 18:58:56 2017 demourgues
*/

#include <string.h>
#include "struct.h"
#include "abs.h"

void my_init (t_my_struct *test, int i, char *str)
{
  test->id = MY_ABS(i);
  test->str = strdup(str); 
}

/*int	main()
{
  int i = -4;
  char *str = "Il fait beau";
  
  my_init(
}
*/
