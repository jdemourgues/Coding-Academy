/*
** rubiks.h for rubiks header in /home/jerome/rendu/pool_c_d09/headers
** 
** Made by demourgues
** Login   <jerome>
** 
** Started on  Thu Oct 12 09:41:07 2017 demourgues
** Last update Wed Oct 18 09:22:00 2017 demourgues
*/
#ifndef RUBICKS_H_
#define RUBICKS_H_

#define PRINT_SQUARE_DEBUG__ 0
#define EMPTY 0
#define BLOCKED 1
#define MY_ABS(x)((x >= 0) ? x : (x * (-1)))

void my_putchar(char a);
void my_putstr(char *str);
void my_putnbr(int nb);
void print_tab(int **table);
void algo_line(int **table, int line);
void algo_column(int **table, int column);
void algo_square(int **table, int square);
void algo_line_reverse(int **table, int line);
void algo_column_reverse(int **table, int column);
void algo_square_reverse(int**table,int square);
int is_in_line(int **table, int line,int value);
int is_in_col(int **table, int column, int value);
int *look_for_space(int **table, int *lines, int *columns, int value);
int *look_for_value(int **table, int *lines, int *columns, int value);
void rotate_lines(int **table, int line, int offset);
void rotate_columns(int **table, int column, int offset);

#endif
