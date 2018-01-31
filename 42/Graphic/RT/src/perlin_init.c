/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   perlin_init.c                                      :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: lomeress <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2017/06/24 13:42:57 by lomeress          #+#    #+#             */
/*   Updated: 2017/06/24 13:45:00 by lomeress         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "rt.h"

static void	init_perlin5(t_env *e)
{
	e->p[96] = 0;
	e->p[97] = 25;
	e->p[98] = 63;
	e->p[99] = 161;
	e->p[100] = 0;
	e->p[101] = 216;
	e->p[102] = 80;
	e->p[103] = 73;
	e->p[104] = 209;
	e->p[105] = 76;
	e->p[106] = 132;
	e->p[107] = 187;
	e->p[108] = 208;
	e->p[109] = 0;
	e->p[110] = 18;
	e->p[111] = 169;
	e->p[112] = 200;
	e->p[113] = 196;
	e->p[114] = 135;
	e->p[115] = 130;
	e->p[116] = 116;
	e->p[117] = 188;
	e->p[118] = 159;
	e->p[119] = 86;
	init_perlin6(e);
}

static void	init_perlin4(t_env *e)
{
	e->p[72] = 77;
	e->p[73] = 146;
	e->p[74] = 158;
	e->p[75] = 231;
	e->p[76] = 83;
	e->p[77] = 111;
	e->p[78] = 229;
	e->p[79] = 122;
	e->p[80] = 60;
	e->p[81] = 211;
	e->p[82] = 133;
	e->p[83] = 230;
	e->p[84] = 220;
	e->p[85] = 105;
	e->p[86] = 92;
	e->p[87] = 41;
	e->p[88] = 55;
	e->p[89] = 46;
	e->p[90] = 245;
	e->p[91] = 40;
	e->p[92] = 244;
	e->p[93] = 102;
	e->p[94] = 143;
	e->p[95] = 54;
	init_perlin5(e);
}

static void	init_perlin3(t_env *e)
{
	e->p[48] = 57;
	e->p[49] = 177;
	e->p[50] = 33;
	e->p[51] = 88;
	e->p[52] = 237;
	e->p[53] = 149;
	e->p[54] = 56;
	e->p[55] = 87;
	e->p[56] = 174;
	e->p[57] = 20;
	e->p[58] = 125;
	e->p[59] = 136;
	e->p[60] = 171;
	e->p[61] = 168;
	e->p[62] = 0;
	e->p[63] = 175;
	e->p[64] = 74;
	e->p[65] = 165;
	e->p[66] = 71;
	e->p[67] = 134;
	e->p[68] = 139;
	e->p[69] = 48;
	e->p[70] = 27;
	e->p[71] = 166;
	init_perlin4(e);
}

static void	init_perlin2(t_env *e)
{
	e->p[24] = 37;
	e->p[25] = 240;
	e->p[26] = 21;
	e->p[27] = 10;
	e->p[28] = 23;
	e->p[29] = 190;
	e->p[30] = 0;
	e->p[31] = 148;
	e->p[32] = 247;
	e->p[33] = 120;
	e->p[34] = 234;
	e->p[35] = 75;
	e->p[36] = 0;
	e->p[37] = 26;
	e->p[38] = 197;
	e->p[39] = 62;
	e->p[40] = 94;
	e->p[41] = 252;
	e->p[42] = 219;
	e->p[43] = 203;
	e->p[44] = 117;
	e->p[45] = 35;
	e->p[46] = 11;
	e->p[47] = 32;
	init_perlin3(e);
}

void		init_perlin(t_env *e)
{
	e->p[0] = 151;
	e->p[1] = 160;
	e->p[2] = 137;
	e->p[3] = 91;
	e->p[4] = 90;
	e->p[5] = 15;
	e->p[6] = 131;
	e->p[7] = 13;
	e->p[8] = 201;
	e->p[9] = 95;
	e->p[10] = 96;
	e->p[11] = 53;
	e->p[12] = 194;
	e->p[13] = 233;
	e->p[14] = 7;
	e->p[15] = 225;
	e->p[16] = 140;
	e->p[17] = 36;
	e->p[18] = 103;
	e->p[19] = 30;
	e->p[20] = 69;
	e->p[21] = 142;
	e->p[22] = 8;
	e->p[23] = 99;
	init_perlin2(e);
}