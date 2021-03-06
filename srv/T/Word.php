<?php

class T_Word {
	/** 消费类型 */
	static $EXPENSE_TYPE = array(
		1 => '清除建筑CD',
		2 => '清除科技CD',
		3 => '清除武器CD',
		4 => '军官更名',
		5 => '军官洗点',
		6 => '寻将',
		7 => '开启武器槽',
		8 => '军官复活',
		9 => '增加建筑队列',
		10 => '遗忘技能',
		11 => '购买道具',
		12 => '刷新学院',
		13 => 'VIP购买活力',
		14 => '购买VIP资源包',
		15 => '购买VIP功能',
		16 => 'VIP减少出征时间',
		17 => '军团升级',
		18 => '学习技能',
		19 => '拍卖行保管费',
		20 => '拍卖行购买',
		21 => '拍卖行竞价',
		22 => '玩家改名',
		23 => '购买军令',
		24 => '清除副本CD时间',
		25 => '购买野地权限',
		26 => '装备升级 ',
		27 => '培养军官 ',
		28 => '全服广播',
		29 => '尝试招募 ',
		30 => '抽奖 ',
		31 => '购买商品 ',
		32 => '军官兑换 ',
		33 => '清除解救CD时间',
		34 => '购买突围次数',
		35 => '购买多人副本次数',
		36 => '购买多人副本加成',
		37 => '清除突围CD时间',
		38 => '跑马系统投注',
		39 => '跑马系统打气',
		40 => '兑换',
	);

	/** 白1, 绿2, 蓝3, 紫4,  红5, 金6*/
	static $EQUIP_QUAL = array(
		T_Equip::EQUIP_WHITE => '白',
		T_Equip::EQUIP_GREEEN => '绿',
		T_Equip::EQUIP_BLUE => '蓝',
		T_Equip::EQUIP_PURPLE => '紫',
		T_Equip::EQUIP_RED => '红',
		T_Equip::EQUIP_GOLD => '金',
	);

	/** 装备名称 */
	static $EQUIP_NAME = array(
		1 => '少尉',
		10 => '中尉',
		20 => '上尉',
		30 => '少校',
		40 => '中校',
		50 => '上校',
		60 => '少将',
		70 => '中将',
		80 => '上将',
		90 => '元帅',
	);

	/** 装备位置 */
	static $EQUIP_POS = array(
		T_Equip::EQUIP_HAT => '军帽',
		T_Equip::EQUIP_UNIFORM => '军服',
		T_Equip::EQUIP_WEAPON => '手枪',
		T_Equip::EQUIP_MEDAL => '军徽',
		T_Equip::EQUIP_SHOES => '军靴',
		T_Equip::EQUIP_SIT => '座驾',
	);
}

?>