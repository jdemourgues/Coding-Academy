/*
** ex_04.c for ex_04.c in /home/jerome/rendu/pool_c_d05/ex_04
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Fri Oct  6 15:55:42 2017 demourgues
** Last update Fri Oct  6 16:29:01 2017 demourgues
*/

#include <stdio.h>
/*#include <unistd.h> */

char*	my_strupcase(char *str)
{
  int i = 0;
  
  while (str[i] != '\0')  
    {if (str[i] > 96 && str[i] < 123)
	{
	  str[i]=str[i]-32;
	}
    ++i;  
  }
    return(str);
}
/*
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

int	main()
{
  char str[7] = "jeRome";
  
  my_putstr(str);  
  my_strupcase(str);
  my_putstr(str);  
  return(0);
}
*/
