/*
** conditions.c for conditions.c in /home/jerome/rendu/pool_c_d03/ex_04
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Wed Oct  4 18:06:14 2017 demourgues
** Last update Wed Oct  4 18:40:08 2017 demourgues
*/
#include <unistd.h>
void	conditions(int n)
{
  char c = '+';
  char d = '-';
  char e = '0';

  if (n > 0)
    write(1, &c, 1);
  else if (n < 0)
    write(1, &d, 1);
  else if (n == 0)
    write(1, &e, 1);
}

/*int main()
{
  conditions(-564);
  conditions(564);
  conditions(0);
  return (0);
}
*/
