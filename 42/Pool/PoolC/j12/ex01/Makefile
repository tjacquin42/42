# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tjacquin <tjacquin@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2016/02/03 02:06:52 by tjacquin          #+#    #+#              #
#    Updated: 2016/02/03 02:07:12 by tjacquin         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

NAME = ft_cat

FLAGS = -Wall -Werror -Wextra

SOURCE = main.c

all: $(NAME)

$(NAME):
		gcc -c $(FLAGS) $(SOURCE)
		gcc -o $(NAME) main.o

clean: 
	rm -f main.o

fclean: clean
	rm -f $(NAME)

re: fclean all
