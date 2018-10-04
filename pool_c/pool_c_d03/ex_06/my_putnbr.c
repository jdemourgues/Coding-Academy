/*
** my_putnbr.c for my_putnbr.c in /home/jerome/rendu/pool_c_d03/ex_06
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Wed Oct  4 18:57:00 2017 demourgues
** Last update Wed Oct  4 20:38:19 2017 demourgues
*/
#include <unistd.h>

void	my_putchar(char c)
{
  write(1, &c, 1);
}

void	my_putnbr_r(int nr)
{
  if (nr > 9)
  {
    my_putnbr_r(nr / 10);
  }
  my_putchar(48 + nr % 10);
}

void	my_putnbr(int nb)
{
  int n;

  n = nb;
  if (nb < 0)
    {
      my_putchar('-');
      n = -nb;
    }
  my_putnbr_r(n);
  return;
}
/*int	main()
{
  my_putnbr(-2147483648);
  return (0);
}
*/
