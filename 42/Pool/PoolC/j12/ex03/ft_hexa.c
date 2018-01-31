/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_hexa.c                                          :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: tjacquin <tjacquin@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/02/03 02:12:39 by tjacquin          #+#    #+#             */
/*   Updated: 2016/02/03 02:13:02 by tjacquin         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "hexdump.h"

void	ft_putchar(char c)
{
	write(1, &c, 1);
}

void	ft_bis(int i, char *base, int mod[100])
{
	while (i >= 0)
	{
		ft_putchar(base[mod[i]]);
		i--;
	}
}

void	ft_hexa(int num)
{
	int		mod[100];
	int		i;
	char	*base;
	int		n;

	i = 0;
	n = num;
	base = "0123456789abcdef";
	if (num != 0)
	{
		while (num)
		{
			mod[i] = num % 16;
			num = num / 16;
			i++;
		}
		i--;
		if (n < 16)
			ft_putchar('0');
		ft_bis(i, base, mod);
	}
	else
		ft_putstr("  ");
}

int		ft_strcmp(char *s1, char *s2)
{
	while (s1 == s2 && s1)
	{
		++s1;
		++s2;
	}
	return (*s1 - *s2);
}
