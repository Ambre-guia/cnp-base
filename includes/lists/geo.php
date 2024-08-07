<?php


function myRegionsList()
{
    $t_regions = array();
    
    $t_regions['Alsace'] = '67,68';
    $t_regions['Aquitaine'] = '24,33,40,47,64';
    $t_regions['Auvergne'] = '03,15,43,63';
    $t_regions['Basse-Normandie'] = '14,50,61';
    $t_regions['Bourgogne'] = '21,58,71,89';
    $t_regions['Bretagne'] = '22,29,35,56';
    $t_regions['Centre'] = '18,28,36,37,41,45';
    $t_regions['Champagne-Ardenne'] = '08,10,51,52';
    $t_regions['Corse'] = '2A,2B';
    $t_regions['Franche-Comté'] = '25,39,70,90';
    $t_regions['Haute-Normandie'] = '27,76';
    $t_regions['Ile-de-France'] = '75,77,78,91,92,93,94,95';
    $t_regions['Languedoc-Roussillon'] = '11,30,34,48,66';
    $t_regions['Limousin'] = '19,23,87';
    $t_regions['Lorraine'] = '54,55,57,88';
    $t_regions['Midi-Pyrénées'] = '09,12,31,32,46,65,81,82';
    $t_regions['Nord-Pas-de-Calais'] = '59,62';
    $t_regions['Pays de la Loire'] = '44,49,53,72,85';
    $t_regions['Picardie'] = '02,60,80';
    $t_regions['Poitou-Charentes'] = '16,17,79,86';
    $t_regions['Provence-Alpes-Côte-d\'Azur'] = '04,05,06,13,83,84';
    $t_regions['Rhône-Alpes'] = '01,07,26,38,42,69,73,74';
    $t_regions['DOM'] = '971,972,973,974';
    
    return $t_regions;

}

function myDepartmentsList()
{
    $t_departements = array();
    
    $t_departements['01'] = 'Ain';
    $t_departements['02'] = 'Aisne';
    $t_departements['03'] = 'Allier';
    $t_departements['04'] = 'Alpes-de-Haute-Provence';
    $t_departements['05'] = 'Hautes-Alpes';
    $t_departements['06'] = 'Alpes-Maritimes';
    $t_departements['07'] = 'Ardèche';
    $t_departements['08'] = 'Ardennes';
    $t_departements['09'] = 'Ariège';
    $t_departements['10'] = 'Aube';
    $t_departements['11'] = 'Aude';
    $t_departements['12'] = 'Aveyron';
    $t_departements['13'] = 'Bouches-du-Rhône';
    $t_departements['14'] = 'Calvados';
    $t_departements['15'] = 'Cantal';
    $t_departements['16'] = 'Charente';
    $t_departements['17'] = 'Charente-Maritime';
    $t_departements['18'] = 'Cher';
    $t_departements['19'] = 'Corrèze';
    
    $t_departements['21'] = 'Côte-d\'Or';
    $t_departements['22'] = 'Côtes-d\'Armor';
    $t_departements['23'] = 'Creuse';
    $t_departements['24'] = 'Dordogne';
    $t_departements['25'] = 'Doubs';
    $t_departements['26'] = 'Drôme';
    $t_departements['27'] = 'Eure';
    $t_departements['28'] = 'Eure-et-Loir';
    $t_departements['29'] = 'Finistère';
    $t_departements['30'] = 'Gard';
    $t_departements['31'] = 'Haute-Garonne';
    $t_departements['32'] = 'Gers';
    $t_departements['33'] = 'Gironde';
    $t_departements['34'] = 'Hérault';
    $t_departements['35'] = 'Ille-et-Vilaine';
    $t_departements['36'] = 'Indre';
    $t_departements['37'] = 'Indre-et-Loire';
    $t_departements['38'] = 'Isère';
    $t_departements['39'] = 'Jura';
    $t_departements['40'] = 'Landes';
    $t_departements['41'] = 'Loir-et-Cher';
    $t_departements['42'] = 'Loire';
    $t_departements['43'] = 'Haute-Loire';
    $t_departements['44'] = 'Loire-Atlantique';
    $t_departements['45'] = 'Loiret';
    $t_departements['46'] = 'Lot';
    $t_departements['47'] = 'Lot-et-Garonne';
    $t_departements['48'] = 'Lozère';
    $t_departements['49'] = 'Maine-et-Loire';
    $t_departements['50'] = 'Manche';
    $t_departements['51'] = 'Marne';
    $t_departements['52'] = 'Haute-Marne';
    $t_departements['53'] = 'Mayenne';
    $t_departements['54'] = 'Meurthe-et-Moselle';
    $t_departements['55'] = 'Meuse';
    $t_departements['56'] = 'Morbihan';
    $t_departements['57'] = 'Moselle';
    $t_departements['58'] = 'Nièvre';
    $t_departements['59'] = 'Nord';
    $t_departements['60'] = 'Oise';
    $t_departements['61'] = 'Orne';
    $t_departements['62'] = 'Pas-de-Calais';
    $t_departements['63'] = 'Puy-de-Dôme';
    $t_departements['64'] = 'Pyrénées-Atlantiques';
    $t_departements['65'] = 'Hautes-Pyrénées';
    $t_departements['66'] = 'Pyrénées-Orientales';
    $t_departements['67'] = 'Bas-Rhin';
    $t_departements['68'] = 'Haut-Rhin';
    $t_departements['69'] = 'Rhône';
    $t_departements['70'] = 'Haute-Saône';
    $t_departements['71'] = 'Saône-et-Loire';
    $t_departements['72'] = 'Sarthe';
    $t_departements['73'] = 'Savoie';
    $t_departements['74'] = 'Haute-Savoie';
    $t_departements['75'] = 'Paris';
    $t_departements['76'] = 'Seine-Maritime';
    $t_departements['77'] = 'Seine-et-Marne';
    $t_departements['78'] = 'Yvelines';
    $t_departements['79'] = 'Deux-Sèvres';
    $t_departements['80'] = 'Somme';
    $t_departements['81'] = 'Tarn';
    $t_departements['82'] = 'Tarn-et-Garonne';
    $t_departements['83'] = 'Var';
    $t_departements['84'] = 'Vaucluse';
    $t_departements['85'] = 'Vendée';
    $t_departements['86'] = 'Vienne';
    $t_departements['87'] = 'Haute-Vienne';
    $t_departements['88'] = 'Vosges';
    $t_departements['89'] = 'Yonne';
    $t_departements['90'] = 'Territoire de Belfort';
    $t_departements['91'] = 'Essonne';
    $t_departements['92'] = 'Hauts-de-Seine';
    $t_departements['93'] = 'Seine-Saint-Denis';
    $t_departements['94'] = 'Val-de-Marne';
    $t_departements['95'] = 'Val-d\'Oise';
    $t_departements['971'] = 'Guadeloupe';
    $t_departements['972'] = 'Martinique';
    $t_departements['973'] = 'Guyane';
    $t_departements['974'] = 'La Réunion';
    $t_departements['2A'] = 'Corse-du-Sud';
    $t_departements['2B'] = 'Haute-Corse';

    return $t_departements;
}