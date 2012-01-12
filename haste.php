<?
	#
	# $Id$
	#

	ini_set('memory_limit', '100M');

	#
	# this come from flamework, but using a different library should be easy.
	# https://github.com/exflickr/flamework/blob/master/www/include/lib_http.php
	#

	include('lib_http.php');


	#
	# change the values here to test different ranges
	#

	for ($i=0; $i<=100; $i++){
		get_deeps($i * 100);
	}



	#
	# this function fetches the data from femaledwarf
	#


function get_deeps($haste){

	#
	# enter your current haste total here
	#

	$diff = $haste - 2000;


	#
	# params to pass to FD
	#

	$params = array(
		'battle_buff'	=>'',
		'buff_di'	=>'',
		'buff_fi'	=>'Y',
		'buff_fort'	=>'Y',
		'buff_heroism'	=>'Y',
		'buff_kings'	=>'Y',
		'buff_lop'	=>'Y',
		'buff_might'	=>'Y',
		'buff_soe'	=>'Y',
		'buff_windfury'	=>'Y',
		'char_race'	=>'Night Elf',
		'custom_agi'	=>'0',
		'custom_ap'	=>'0',
		'custom_cri'	=>'0',
		'custom_has'	=>$diff,
		'custom_health'	=>'0',
		'custom_hit'	=>'0',
		'custom_mas'	=>'0',
		'custom_res'	=>'0',
		'custom_sta'	=>'0',
		'debuff_bfrenzy'	=>'Y',
		'debuff_mangle'	=>'Y',
		'debuff_mark'	=>'',
		'debuff_sdebuff'	=>'Y',
		'debuff_sunder'	=>'Y',
		'debug_display'	=>'0',
		'default_gem'	=>'52212',
		'default_reffrom'	=>'',
		'default_refto'	=>'',
		'default_talents'	=>'',
		'enchant_slot_boots'	=>'4076',
		'enchant_slot_bracers'	=>'3756',
		'enchant_slot_chest'	=>'4063',
		'enchant_slot_cloak'	=>'1099',
		'enchant_slot_gloves'	=>'1603',
		'enchant_slot_helm'	=>'4209',
		'enchant_slot_mainhand'	=>'4227',
		'enchant_slot_offhand'	=>'',
		'enchant_slot_pants'	=>'4126',
		'enchant_slot_ranged'	=>'4175',
		'enchant_slot_ring1'	=>'',
		'enchant_slot_ring2'	=>'',
		'enchant_slot_shoulder'	=>'4204',
		'eng_glove'	=>'',
		'extra_belt_socket'	=>'Y',
		'fightbuff_crit'	=>'0',
		'fightbuff_critbonus'	=>'0',
		'fightbuff_haste'	=>'0',
		'fightbuff_magic'	=>'0',
		'fightbuff_phys'	=>'0',
		'filter_min_gem_rarity'	=>'1',
		'filter_min_ilevel'	=>'0',
		'filter_min_rarity'	=>'',
		'flask_buff'	=>'65535',
		'food_buff'	=>'62669',
		'guardian_buff'	=>'',
		'lang'	=>'en',
		'major_glyph1'	=>'13',
		'major_glyph2'	=>'19',
		'major_glyph3'	=>'14',
		'pet_id'	=>'31',
		'pfightbuff_crit'	=>'',
		'pfightbuff_critbonus'	=>'',
		'pfightbuff_haste'	=>'',
		'pfightbuff_phys'	=>'',
		'potion_buff'	=>'agi',
		'prime_glyph1'	=>'5',
		'prime_glyph2'	=>'9',
		'prime_glyph3'	=>'7',
		'prof1'	=>'Skinning',
		'prof2'	=>'Leatherworking',
		'ptalent_1'	=>'2',
		'ptalent_10'	=>'0',
		'ptalent_11'	=>'1',
		'ptalent_12'	=>'0',
		'ptalent_13'	=>'3',
		'ptalent_14'	=>'0',
		'ptalent_15'	=>'1',
		'ptalent_16'	=>'0',
		'ptalent_17'	=>'1',
		'ptalent_18'	=>'1',
		'ptalent_19'	=>'1',
		'ptalent_2'	=>'1',
		'ptalent_3'	=>'0',
		'ptalent_4'	=>'0',
		'ptalent_5'	=>'0',
		'ptalent_6'	=>'2',
		'ptalent_7'	=>'3',
		'ptalent_8'	=>'0',
		'ptalent_9'	=>'1',
		'reffrom_slot_belt'	=>'',
		'reffrom_slot_boots'	=>'mas',
		'reffrom_slot_bracers'	=>'has',
		'reffrom_slot_chest'	=>'mas',
		'reffrom_slot_cloak'	=>'mas',
		'reffrom_slot_gloves'	=>'',
		'reffrom_slot_helm'	=>'has',
		'reffrom_slot_mainhand'	=>'',
		'reffrom_slot_neck'	=>'has',
		'reffrom_slot_offhand'	=>'',
		'reffrom_slot_pants'	=>'has',
		'reffrom_slot_ranged'	=>'',
		'reffrom_slot_ring1'	=>'mas',
		'reffrom_slot_ring2'	=>'',
		'reffrom_slot_shoulder'	=>'',
		'reffrom_slot_trinket1'	=>'mas',
		'reffrom_slot_trinket2'	=>'',
		'refto_slot_belt'	=>'',
		'refto_slot_boots'	=>'cri',
		'refto_slot_bracers'	=>'hit',
		'refto_slot_chest'	=>'cri',
		'refto_slot_cloak'	=>'hit',
		'refto_slot_gloves'	=>'',
		'refto_slot_helm'	=>'hit',
		'refto_slot_mainhand'	=>'',
		'refto_slot_neck'	=>'cri',
		'refto_slot_offhand'	=>'',
		'refto_slot_pants'	=>'hit',
		'refto_slot_ranged'	=>'',
		'refto_slot_ring1'	=>'cri',
		'refto_slot_ring2'	=>'',
		'refto_slot_shoulder'	=>'',
		'refto_slot_trinket1'	=>'hit',
		'refto_slot_trinket2'	=>'',
		'settings_aspect_used'	=>'hawk',
		'settings_ca_range_perc'	=>'20',
		'settings_delay_speed'	=>'0',
		'settings_ff_range_perc'	=>'30',
		'settings_fight_length'	=>'5',
		'settings_hero_time'	=>'0',
		'settings_iss_behavior'	=>'',
		'settings_ks_range_perc'	=>'15',
		'settings_latency_ms'	=>'150',
		'settings_lnl_disable_arca...'	=>'1',
		'settings_min_arcane_focus'	=>'0',
		'settings_save_focus'	=>'explosive',
		'settings_shot_wait'	=>'0.5',
		'settings_sniper_uptime'	=>'100',
		'settings_target_armor'	=>'11978',
		'settings_target_level'	=>'88',
		'settings_term_range_perc'	=>'20',
		'settings_use_avg'	=>'1',
		'settings_wait_kc'	=>'1',
		'settings_wait_kill'	=>'1',
		'settings_wait_specialshot'	=>'1',
		'shot_priority_list'	=>'',
		'shotpriority[]1'	=>'rf',
		'shotpriority[]2'	=>'kill',
		'shotpriority[]3'	=>'explosive',
		'shotpriority[]4'	=>'ba',
		'shotpriority[]5'	=>'serpent',
		'shotpriority[]6'	=>'cobra',
		'slot_belt'	=>'56539',
		'slot_boots'	=>'62385',
		'slot_bracers'	=>'66935',
		'slot_chest'	=>'59346',
		'slot_cloak'	=>'59348',
		'slot_gloves'	=>'59472',
		'slot_helm'	=>'62429',
		'slot_mainhand'	=>'65168',
		'slot_neck'	=>'62378',
		'slot_offhand'	=>'',
		'slot_pants'	=>'58122',
		'slot_ranged'	=>'59320',
		'slot_ring1'	=>'62348',
		'slot_ring2'	=>'56310',
		'slot_shoulder'	=>'56419',
		'slot_trinket1'	=>'56394',
		'slot_trinket2'	=>'56295',
		'socket1_slot_boots'	=>'52212',
		'socket1_slot_chest'	=>'52212',
		'socket1_slot_gloves'	=>'52212',
		'socket1_slot_pants'	=>'52212',
		'socket1_slot_shoulder'	=>'52238',
		'socket2_slot_chest'	=>'52220',
		'socket2_slot_helm'	=>'52209',
		'socket2_slot_pants'	=>'52212',
		'socket3_slot_belt'	=>'52212',
		'socketmeta_slot_helm'	=>'41400',
		'talent_1'	=>'0',
		'talent_10'	=>'0',
		'talent_11'	=>'0',
		'talent_12'	=>'0',
		'talent_13'	=>'0',
		'talent_14'	=>'0',
		'talent_15'	=>'0',
		'talent_16'	=>'0',
		'talent_17'	=>'0',
		'talent_18'	=>'0',
		'talent_19'	=>'0',
		'talent_2'	=>'3',
		'talent_20'	=>'0',
		'talent_21'	=>'3',
		'talent_22'	=>'0',
		'talent_23'	=>'0',
		'talent_24'	=>'0',
		'talent_25'	=>'0',
		'talent_26'	=>'0',
		'talent_27'	=>'0',
		'talent_28'	=>'0',
		'talent_29'	=>'0',
		'talent_3'	=>'2',
		'talent_30'	=>'0',
		'talent_31'	=>'0',
		'talent_32'	=>'0',
		'talent_33'	=>'0',
		'talent_34'	=>'0',
		'talent_35'	=>'0',
		'talent_36'	=>'0',
		'talent_37'	=>'0',
		'talent_38'	=>'0',
		'talent_39'	=>'0',
		'talent_4'	=>'0',
		'talent_40'	=>'3',
		'talent_41'	=>'2',
		'talent_42'	=>'2',
		'talent_43'	=>'3',
		'talent_44'	=>'0',
		'talent_45'	=>'0',
		'talent_46'	=>'3',
		'talent_47'	=>'0',
		'talent_48'	=>'2',
		'talent_49'	=>'3',
		'talent_5'	=>'0',
		'talent_50'	=>'0',
		'talent_51'	=>'2',
		'talent_52'	=>'2',
		'talent_53'	=>'1',
		'talent_54'	=>'2',
		'talent_55'	=>'1',
		'talent_56'	=>'3',
		'talent_57'	=>'2',
		'talent_58'	=>'1',
		'talent_6'	=>'1',
		'talent_7'	=>'0',
		'talent_8'	=>'0',
		'talent_9'	=>'0',
		'talent_url'	=>'',
	);


	#
	# make HTTP request
	#

	$headers = array(
		'Content-Type'		=> 'application/x-www-form-urlencoded; charset=UTF-8',
		'X-Requested-With'	=> 'XMLHttpRequest',
		'Referer'		=> 'http://www.femaledwarf.com/',
		'Cookie'		=> 'account_id=12841; acct_username=iamcal; acct_email=cal%40iamcal.com; debug_display=1',
	);

	$ret = http_post('http://www.femaledwarf.com/services/update_stats.php', $params, $headers);


	#
	# find DPS & haste
	#

	$dps = 0;
	$haste = 0;
	$per = 0;

	if (preg_match('!<span id="combined_dps">(\d+\.\d+)</span>!', $ret['body'], $m)){

		$dps = $m[1];
	}

	if (preg_match('!Haste Rating \+ 1</th>(\s+)<td>(\d+\.\d+)!s', $ret['body'], $m)){

		$per = $m[2];
	}

	if (preg_match('!Haste Rating:</th>(\s+)<td align="right">(\d+)!s', $ret['body'], $m)){

		$haste = $m[2];
	}

	echo "$haste\t$dps\t$per\n";
}
	#echo $body;
?>
