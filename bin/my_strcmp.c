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

