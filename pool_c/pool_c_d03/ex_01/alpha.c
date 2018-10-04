#include <unistd.h>

void my_putchar(char caractere)
{
  write (1, &caractere, 1);
}

void alpha()
{
  int i = 65;
  while (i != 91)
  {
    my_putchar(i);
    ++i;
  }
  my_putchar('\n');
}

/* int      main()
{
  alpha();
  return (0);
  }*/
