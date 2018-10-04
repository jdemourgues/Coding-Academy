/*
** ex_02.c for ex_02.c in /home/jerome/rendu/pool_c_d04/ex_02
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct  5 12:09:30 2017 demourgues
** Last update Thu Oct  5 15:23:18 2017 demourgues
*/

#include <stdio.h>
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
      ++i;
    }
}
/*
int	main()
{
  char *str;

  str = "";
  my_putstr(str);
  return(0);
}
*/
