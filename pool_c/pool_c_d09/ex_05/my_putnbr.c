#include <unistd.h>
#include "rubiks.h"

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
  long int n;

  
  n = nb;
  if (nb < 0)
    {
      my_putchar('-');
      n = -nb;
    }
  my_putnbr_r(n);
  return;
}
