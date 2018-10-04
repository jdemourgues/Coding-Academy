/*
** ex_03.c for ex_03.c in /home/jerome/rendu/pool_c_d05/ex_03
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Fri Oct  6 14:51:00 2017 demourgues
** Last update Fri Oct  6 18:23:26 2017 demourgues
*/
#include <stdio.h>

int my_strcmp(char *str1, char *str2)
{
  int i = 0;
  int res = 0;

  while (str1[i] != '\0' && str2[i] != '\0' && str1[i]==str2[i])
    {
      i++;
    }
  res = str1[i] - str2[i];
  return(res);
}
/*
int main(int argc, char const *argv[])
{ char *str1 = "lol";
  char *str2 = "Coucou !";
  char *str3 = "Hmmm.. ok ! see you tomorrow";
  char str4[4] = "Tot";

  printf("%d\n", my_strcmp(str1, str2));
  printf("%d\n", my_strcmp(str1, str1));
  printf("%d\n", my_strcmp(str4, str1));
  printf("%d\n", my_strcmp(str3, str4));
  printf("%d\n", my_strcmp(str4, str3));
  (void)argc;
  (void)argv;
  return 0;
}
*/
