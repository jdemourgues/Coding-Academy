/*
** revalpha.c for revalpha.c in /home/jerome/rendu/pool_c_d03/ex_02
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Wed Oct  4 16:04:21 2017 demourgues
** Last update Wed Oct  4 16:10:11 2017 demourgues
*/
#include <unistd.h>

void my_putchar(char caractere)
{
  write (1, &caractere, 1);
}

void revalpha()
{
  int i = 90;
  while (i != 64)
  {
    my_putchar(i);
    --i;
  }
  my_putchar('\n');
}

/*int      main()
{
  revalpha();
  return (0);
  }*/
