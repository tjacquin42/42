/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   sastantua.c                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: tjacquin <tjacquin@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2015/10/18 22:58:06 by tjacquin          #+#    #+#             */
/*   Updated: 2015/10/18 22:58:33 by tjacquin         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

void	ft_putchar(char c);

void	ft_poignee(int *tab, int pn)
{
	if ((tab[1] + 1 == tab[2] / 2 + 1)
		&& (pn == tab[2] - 1) && (tab[2] > 4))
		ft_putchar('$');
	else
		ft_putchar('|');
}

void	ft_porte(int *tab, int size, int et, int nbresp)
{
	int a[3];

	a[2] = 1;
	a[0] = tab[2];
	a[1] = tab[2] % 2;
	nbresp = nbresp - (tab[2] / 2);
	while (size-- > 1)
	{
		ft_putchar(' ');
		a[1]++;
	}
	ft_putchar('/');
	while (et-- > 0)
	{
		while (a[1] == nbresp && a[0]-- != 0 && tab[1] + 1 <= tab[2])
		{
			ft_poignee(tab, a[2]);
			a[2]++;
			et--;
		}
		ft_putchar('*');
		a[1]++;
	}
	ft_putchar(92);
	ft_putchar('\n');
}

void	ft_ecriture(int *tab, int size, int et, int nbresp)
{
	if (tab[2] % 2 == 0)
		tab[2] = tab[2] - 1;
	if (tab[6] > 0)
	{
		while (size > 1)
		{
			ft_putchar(' ');
			size--;
		}
		ft_putchar('/');
		while (et > 0)
		{
			ft_putchar('*');
			et--;
		}
		ft_putchar(92);
		ft_putchar('\n');
	}
	if (tab[6] == 0)
		ft_porte(tab, size, et, nbresp);
}

void	ft_procedure(int *tab, int size, int nbresp, int et)
{
	tab[8] = 1;
	tab[9] = 2;
	tab[1] = tab[7];
	tab[10] = 4;
	while (tab[6]-- > 0)
	{
		while (tab[1]-- > 0)
		{
			ft_ecriture(tab, size, et, nbresp);
			et = et + 2;
			size--;
		}
		et = et + tab[10];
		size = size - tab[9];
		if (tab[8] == 2)
		{
			tab[9]++;
			tab[8] = 0;
			tab[10] = tab[10] + 2;
		}
		tab[8]++;
		tab[7]++;
		tab[1] = tab[7];
	}
}

void	sastantua(int size)
{
	int tab[13];
	int nbresp;
	int et;

	et = 1;
	tab[7] = 3;
	tab[6] = size;
	tab[0] = 2;
	size = size + 2;
	tab[11] = size;
	tab[2] = 0;
	while (tab[11] > 3)
	{
		tab[11]--;
		size = size + tab[11] + tab[0];
		tab[2]++;
		if (tab[2] == 2)
		{
			tab[2] = 0;
			tab[0]++;
		}
	}
	tab[2] = tab[6];
	nbresp = size;
	ft_procedure(tab, size, nbresp, et);
}
