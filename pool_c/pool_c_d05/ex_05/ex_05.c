/*
** ex_05.c for ex_05.c in /home/jerome/rendu/pool_c_d05/ex_05
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Fri Oct  6 16:39:35 2017 demourgues
** Last update Fri Oct  6 19:06:00 2017 demourgues
*/
#include <stdio.h>

int	my_str_isalpha(char *str)
{
  int i = 0;
  
  if (str[i] == '\0')
    return(0);
    while (str[i] != '\0')
      {
        if (!(((str[i] > 64 && str[i] < 91) || (str[i] > 96 && str[i] < 123))))
	  {
	    return(0);
	  }
      ++i;	
      }
    return(1);  
}
/*
int main()
{
  char  str1[6] = "Hello";
  char	str2[7] = "Pony42";
  char	str3[3] = "42";

  printf("%d\n", my_str_isalpha(str1)); 
  printf("%d\n", my_str_isalpha(str2));
  printf("%d\n", my_str_isalpha(str3)); 
}
*/
