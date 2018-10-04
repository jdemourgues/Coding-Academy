/*
** my_true_loop.c for my_true_loop.c in /home/jeome/rendu/pool_c_d03/ex_03
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Wed Oct  4 16:22:21 2017 demourgues
** Last update Wed Oct  4 18:01:34 2017 demourgues
*/
#include <unistd.h>

void	my_true_loop(unsigned int n)
{
  int i = 1;
  char c = '+';
  char d = '\n';
  
  while (i != n+1)
    {
    write(1, &c, 1);
    ++i;
    }
  write (1, &d, 1);	
}

/*int      main()
{
  my_true_loop(5);
  return (0);
  }*/
