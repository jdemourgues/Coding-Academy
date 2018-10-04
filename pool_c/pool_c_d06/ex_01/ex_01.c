/*
** ex_01.c for my_strcpy in /home/jerome/rendu/pool_c_d06/ex_01
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Mon Oct  9 10:13:45 2017 demourgues
** Last update Mon Oct  9 14:51:13 2017 demourgues
*/
#include <stdio.h>

char *my_strcpy(char *strd,char *strs)
{
  int i = 0;
  
  while (strs[i] != '\0')
    {
    strd[i] = strs[i];
    ++i;
    }
  strd[i] = '\0';
  return(strd);
}

/*int main()
{
  char *str1 = "Hello World!";
  char *str2;

  str2 = my_strcpy(str1,str2);
  printf("%s\n", str2);
  return(0);
}
*/
