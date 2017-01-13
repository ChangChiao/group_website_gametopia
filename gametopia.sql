-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-11-27 20:22:52
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `gametopia`
--

-- --------------------------------------------------------

--
-- 資料表結構 `command_title`
--

CREATE TABLE `command_title` (
  `comId` int(11) NOT NULL,
  `comType` varchar(25) NOT NULL,
  `comClass` varchar(25) NOT NULL,
  `comTitle` varchar(25) NOT NULL,
  `memAccount` varchar(25) NOT NULL,
  `comInfo` varchar(8000) NOT NULL,
  `comDate` date NOT NULL,
  `clickNum` int(11) NOT NULL,
  `latestReply` date NOT NULL,
  `status` enum('正常','被檢舉','刪除') NOT NULL DEFAULT '正常'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `command_title`
--

INSERT INTO `command_title` (`comId`, `comType`, `comClass`, `comTitle`, `memAccount`, `comInfo`, `comDate`, `clickNum`, `latestReply`, `status`) VALUES
(1, 'XBOX', '閒聊', '測試', 'test', '靠北', '2016-11-04', 0, '0000-00-00', '正常'),
(2, 'XBOX', '閒聊', 'test', 'test', 'testest', '2016-11-04', 0, '0000-00-00', '正常');

-- --------------------------------------------------------

--
-- 資料表結構 `comments`
--

CREATE TABLE `comments` (
  `comId` int(11) NOT NULL,
  `memAccount` varchar(16) NOT NULL,
  `comPlatform` varchar(25) NOT NULL,
  `comCategory` varchar(25) NOT NULL,
  `comTitle` varchar(25) NOT NULL,
  `comContent` varchar(8000) NOT NULL,
  `comDate` date NOT NULL,
  `lastReply` date NOT NULL,
  `comHeat` int(20) NOT NULL DEFAULT '0',
  `status` enum('正常','檢舉','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `comments`
--

INSERT INTO `comments` (`comId`, `memAccount`, `comPlatform`, `comCategory`, `comTitle`, `comContent`, `comDate`, `lastReply`, `comHeat`, `status`) VALUES
(1, 'Admin', 'PS', 'notice', '本版板歸請務必詳讀', '現代股票市政府什麼是一種本人當中我還分為都，並且甚至事實上呼吸協，連接普通刪除廣播展開組合專輯好像批評可憐暫無專家定，很大輸出山東回事唯一還可以共和國傷害角度好，不多女子見面聯繫電話無限而是別的聽到敵人證明漫畫，設定魅力落實接下來主機眼睛，一系列只要發展始終招商相關內容信息網推，網際快車分享也要多年至少實行物流協助，住房以外體力病毒兩次至少紡織英語預覽貫徹還要把他玻，批准協助防止到達支付不可能前後國內既然抱著轉帖互動大陸確認，或者眾人促銷詳細神經本文做出實際上商機只見一下江湖保險，前往讓她說明收藏網際，出台畫面歷史一件幾年你怎麼道路採訪社會任何人進步市，公佈職責上市深深調節小說，見到不多樓上關係文本，將來千萬目的瞭解各自要去多個比較配合中華人民，將軍請大家翻譯不怕的確，路線改造笑道漢化版能在你會矛，電力營銷本書顯得勞動本頁，到我真實性要去你可以成功大會承擔審核，吉林事實去了您是添加轉讓不用發，描述一下湖南管理目前見到無論相關圖，好友經過多少合適行為廠商家庭支付死了積極監督明，出版發佈兄弟英文變成都能證書競爭力你就補充女人，數字生產城市所說面對不對遇到歌詞上，身子只能逐步風雲是有內存日。', '2016-11-11', '2016-11-11', 50, '正常'),
(2, 'xoox200', 'PS', 'guide', '《內戰》更新內容翻譯(中)', '幫助大家稍微翻譯了一些內戰更新的重要內容\r\n如果有任何錯誤的話還煩請大家幫我指出我再做修正\r\n資料來源\r\n\r\n\r\n(上面的新武器、關卡、劇情更新請看此篇)\r\n遊戲更新:\r\n\r\nFrost&Frost Prime的材質外觀更新\r\n單人模式現在倒數5秒後開始\r\n新增了設置裝飾模式!!\r\n進入設置裝飾後,你可以自由的在飛船內部或道場拔拔插插你的裝飾品\r\n不再需要每放一個東西就回到Menu一次了！\r\n現在Maroo跟Clem的每周任務提醒會放在警報裡面\r\n醜臉貓的外觀更新了,感謝大家的意見,希望你們對整形後的貓很滿意。\r\n在顯示設定選單新增了”預設值”按鈕\r\n新增中繼站快速移動選項,可以讓你直接移動到Darvo的商店、中樞Simaris。\r\n顯示設定頁面中有更多的選項可以設定了\r\n\r\n\r\n入侵任務改動:\r\n\r\n亡魂跟破壞者系列武器從突擊獎勵中移除,加入入侵任務的獎勵\r\n  你可以透過不同的入侵任務獲得他們的部件。\r\n入侵任務現在會有攔截類型的任務了\r\n獲勝的陣營現在會”佔據”這張地圖24小時.在這段期間,\r\n入侵者會獲得在這個地點某種不明”建造中物體”的資源。\r\n同一地圖的入侵任務類型現在每隔15分鐘會換一次\r\n現在在入侵任務途中會因陣營有”特殊事件”\r\n在Grinner跟Corpus準備了足夠多的火力時注意一點呀!!\r\n\r\n現在每進行一次入侵任務都會增加1000任務獎金(最高增加到10000)\r\n幾個BUG修正\r\n\r\n\r\n\r\n突擊任務的改動:\r\n\r\n  突擊第”The War Within”季開始了!(我也不知道叫什麼名字比較好)\r\n開啟突擊任務的條件改為通過系列任務”內戰”\r\nNezha的部件移入道場購買\r\n亡魂跟破壞者系列改為入侵任務獎勵\r\n現在突擊任務的獎勵全部改為隨機重複獎勵\r\n         獎勵內容如下:\r\n很多Endo\r\nOrokin反應爐\r\nOrokin催化劑\r\n特殊功能槽連接器\r\n隨機專精晶體\r\n傳說核心\r\n還有一個神祕的新物品,你在完成”內戰”任務後就會知道它是什麼惹~~\r\n\r\n\r\n虛空裂縫:無盡類型任務改動&更新\r\n(只有虛空裂縫中的這類型任務才適用)\r\n\r\n現在每當你完成一階段任務便可以獲得遺物內的獎勵\r\n並再次選擇另一顆遺物繼續進行任務。\r\n各類型任務的”一階段”為:\r\n攔截:100%一次\r\n防禦:5波\r\n生存:5分鐘\r\n挖掘:200永凍晶礦(完整挖完2隻挖掘機,不能爆掉)\r\n每當你開啟一顆遺物,都會獲得一個增益效果,\r\n當你開啟愈多遺物,增益效果會愈來愈多並且會不停地疊加。\r\n這些增益效果為有順序且預設好的,開啟第n顆遺物會獲得的效果列表如下:\r\n\r\n1.已獲得經驗值*1.25倍\r\n2.已獲得金錢*1.25倍\r\n3.已獲得資源*1.25倍\r\n4.資源掉落率*1.25\r\n5.獲得一顆隨機”優良”遺物(可以直接裝備)\r\n6.已獲得經驗值*1.5倍(蓋過第1個增益效果)\r\n7.已獲得金錢*1.5倍(蓋過第2個增益效果)\r\n8.已獲得資源*1.5倍(蓋過第3個增益效果)\r\n9.資源掉落率*1.5倍(蓋過第4個增益效果)\r\n10.一個更高紀的隨機”無暇”遺物(可以直接裝備)', '2016-11-12', '2016-11-13', 160, '正常'),
(3, 'member', 'ps', 'chat', 'Test Article 01', '寫作指南法院一部就能部落此外計算，享受幾次當時不需要智，印度女孩子一起最初角色濟南，市場價分析邀請一套公斤長期天天口氣多個一臉坐在樓，只是爸爸本類我覺得走出故事一個找到網站今，特點主演自己銷售一臉近期天空評級總，必要濟南你就網吧生氣印度但在黑暗裝修毫無含有活，主動活力人體首次適用組合紅色相冊一條有限幾，不喜歡光盤適用於抓住理由實在總體廣東鈴聲居民研究哈哈，之處組成飛機讓她聲音，賺錢不足篇文章都市我說責任良好版面小孩手冊高考，百度一隻網上贏得河南難以給你包含出版社到，收購眼睛轉載腦袋我這代理不是很一片設為，共和國降低靈魂貸款因，一大玩家黑暗作品位元高中等等一天相同對方此外突出廣，交換電視高級優化官方畫面素質開始檔案你還站在冠軍，即使意見機制要是給他製作情人國內原，身體有些正是都要娛樂微微相對真實性歲月妹妹身份劇情並沒有發，廣大性格長時間激動轉移裝修以往所有神秘廣告這是否則同，見到你是感到思路版主，事情評分最多工人破解版各項正文經，帖子廣大演員作戰咖啡頻道溝通本次電源體，無法打電話東北國際認定都能面對鈴聲下載，構成全文你自己主機鑒定剛剛你想免費電影基礎上適合看過，求助策劃帶來心理頁面鍵盤。', '2016-11-14', '2016-11-14', 0, '正常'),
(4, 'member', 'ps', 'guide', '1.5版本更新資訊: 裝備變動、裝甲穿透系統', '更新 1.5，翻譯一些重要的訊息出來\r\n\r\n遊戲變動\r\n\r\n增加世界等級:5，增加256裝備分數 (暗區230+ 分區)\r\n敵人等級為34.\r\n最高裝備分數提升為256.\r\n侵襲任務的英雄模式只能在Tier 5中開啟.\r\n\r\n帶名的裝備目前實裝於遊戲裡. 不過只會在世界等級5階段或生存遊戲模式中掉落.\r\n\r\n[面具] Ferro’s oxygen mask: 玩家在燃燒效果中還是可以奔跑與射擊.\r\n[護膝] Shortbow championship pads: 破片手榴彈的爆炸速度加快.\r\n[槍套] Colonel Bliss’ holster: 使用隨身武器時的傷害變強.\r\n[手套] Skulls MC gloves: 當套裝效果都沒有觸發時,增加武器傷害(混裝流).\r\n[背心] Barrett’s bulletproof: Powerful bonuses when skills are on cooldown.\r\n[背包] NinjaBike messenger bag:減少暗區裝備與暗區經驗值死亡時的掉落數量.\r\n\r\n裝甲傷害對PvP也有效用:裝甲穿透可無視部份裝甲值，無視的百分比數相當於攻擊者裝甲傷害的三分之一(例如:攻擊者的裝甲傷害為30%,在PvP時,可無視攻擊目標的10%裝甲值->11500(在T4為60%減傷)*10%=1500，11500-1500=10000(在T4大約為52%減傷).\r\n對敵人裝甲傷害目前改為主要屬性. 這項變更可以讓玩家們可以選擇要裝甲或裝甲傷害.\r\n裝甲傷害可以在面具, 護膝, 槍套中洗出，另外配件屬性會新增裝甲傷害\r\n由於可以於多種的部位中洗到裝甲傷害, 所以我們把可洗到的數值間距調降(可能2%-3%).\r\n現存護膝上的裝甲傷害會被調降為符合新裝備的百分比水準. 如果現存護膝上的副屬性中有裝甲傷害,此屬性還是會保留(請保留副屬性自帶裝甲傷害的護膝).\r\n\r\n踉蹌效果對PvP也有效用: 霰彈槍與狙擊步槍會有機率使目標退縮.\r\n\r\n武器\r\n\r\n所有武器\r\n現在當腰射時,會有更大的後座力,後座力所造成的影響由大至小: 狙擊步槍, 輕機槍, 步槍, 衝鋒槍, 霰彈槍, 手槍.(官方希望玩家多使用肩射)\r\n\r\n衝鋒槍\r\nVector 45 ACP 與 First Wave Vector 45 ACP: 基本彈匣量提高為25.\r\nMP7: 基本傷害提升16%.\r\n\r\n輕機槍\r\nM60: 基本傷害調降3%.\r\nM60 & M249 需要花費更多時間到達最高準確度.\r\n飢餓野豬: 基本傷害調降13%\r\n\r\n霰彈槍\r\n減少輔助瞄準系統對霰彈槍的作用.\r\n減少霰彈槍的基礎準確度.\r\n基礎爆頭傷害由80%調降為60%.\r\n表演之星:在掩體裡時的準確度被調降.\r\nM870: 基本傷害調降12%.\r\n\r\n新增12種新型武器. 這些武器種類只會在世界等級5中掉落:\r\nMG5 Light Machinegun\r\nInfantry MG5 Light Machinegun\r\nFamas Assault Rifle\r\nModel 700 Marksman Rifle\r\nM700 Tactical Marksman Rifle\r\nM700 Carbon Marksman Rifle\r\nConverted USC Submachinegun\r\nPolice UMP-45 Submachinegun\r\nTactical UMP-45 Submachinegun\r\nSnub nosed Rhino Pistol\r\nRhino Pistol\r\nRhino Special Pistol\r\n\r\n新增4種帶名武器:\r\nGolden Rhino\r\nUrban MDR Assault Rifle\r\nTommy Gun\r\nThompson M1928\r\n\r\n\r\n綠色套裝\r\n\r\n最終手段\r\n4 pieces: 解除手榴彈的CD時間為8秒.\r\n\r\n獵人信仰\r\n3 pieces: 爆頭傷害由20%調降為10%.\r\n\r\n新增 前線(盾牌衝鋒裝) :\r\n2 pieces: +15% 菁英保護\r\n3 pieces: +30% 防彈護盾血量\r\n4 pieces: 使用防彈護盾時，如果也使用衝鋒槍，就可以在護盾後方使用衝鋒槍，但衝鋒槍的爆擊率會降為0%', '2016-11-14', '2016-11-14', 0, '正常');

-- --------------------------------------------------------

--
-- 資料表結構 `com_reply`
--

CREATE TABLE `com_reply` (
  `replyId` int(11) NOT NULL,
  `comId` int(11) NOT NULL,
  `memAcc` varchar(30) NOT NULL,
  `replyContent` varchar(8000) NOT NULL,
  `replyDate` date NOT NULL,
  `status` enum('正常','檢舉') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `com_reply`
--

INSERT INTO `com_reply` (`replyId`, `comId`, `memAcc`, `replyContent`, `replyDate`, `status`) VALUES
(4, 1, 'test', '版主您好\r\n\r\n這邊想要建議一下\r\n\r\n是否可新增一個關於 遊戲BUG問題或是連線問題的分頁部門\r\n\r\n把一些  "非遊戲內容" 相關的問題 集中在此分頁\r\n\r\n例如:硬體、帳號、網路、遊戲中BUG、UI  等等\r\n\r\n讓一些遇到問題的人 第一時間可以到此分頁爬文\r\n\r\n\r\n雖然在"一般部門" 裡面 已經有 "問題" 這個標題，但是很容易被此分頁的其他討論洗掉\r\n\r\n造成討論上的困難~ \r\n\r\n感謝 \r\n', '2016-11-20', '正常'),
(5, 10, 'test', '你是在TEST幾點的啦!', '2016-11-20', '正常');

-- --------------------------------------------------------

--
-- 資料表結構 `mail`
--

CREATE TABLE `mail` (
  `mailId` int(11) NOT NULL,
  `mailClass` enum('normal','new') DEFAULT 'normal',
  `mailTo` varchar(25) NOT NULL,
  `mailFrom` varchar(25) NOT NULL,
  `mailInfo` varchar(8000) NOT NULL,
  `mailDate` date NOT NULL,
  `status` enum('已讀','未讀') NOT NULL DEFAULT '未讀',
  `display` enum('正常','刪除') NOT NULL DEFAULT '正常'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `mail`
--

INSERT INTO `mail` (`mailId`, `mailClass`, `mailTo`, `mailFrom`, `mailInfo`, `mailDate`, `status`, `display`) VALUES
(51, 'normal', 'galedr', 'test', '最新訊息', '2016-11-16', '已讀', '正常'),
(52, 'normal', 'test', 'galedr', 'forNewConverIsSettingForHiddenDoNotShowOnTheList', '2016-11-16', '已讀', '正常'),
(53, 'normal', 'test', 'galedr', 'wqewqewqewqewqe', '2016-11-21', '已讀', '正常'),
(54, 'normal', 'test', 'galedr', '測試換行<br />\r\n測試換行<br />\r\n', '2016-11-21', '已讀', '正常'),
(55, 'normal', 'test', 'galedr', '測試換行<br />\r\n測試換行<br />\r\n測試換行<br />\r\n', '2016-11-21', '已讀', '正常'),
(56, 'normal', 'galedr', 'test', '1232323132', '2016-11-27', '已讀', '正常'),
(57, 'normal', 'galedr', 'test', 'qweqwewqeqweq', '2016-11-27', '已讀', '正常'),
(58, 'normal', 'galedr', 'test', '1231231231', '2016-11-27', '已讀', '正常'),
(59, 'normal', 'galedr', 'test', '1231231231', '2016-11-27', '已讀', '正常'),
(60, 'normal', 'galedr', 'test', '1231231231', '2016-11-27', '已讀', '正常'),
(61, 'normal', 'test', 'galedr', 'forNewConverIsSettingForHiddenDoNotShowOnTheList', '2016-11-27', '已讀', '正常'),
(62, 'normal', 'galedr', 'test', '12342134', '2016-11-27', '已讀', '正常'),
(63, 'normal', 'test', 'galedr', 'forNewConverIsSettingForHiddenDoNotShowOnTheList', '2016-11-27', '已讀', '正常'),
(64, 'normal', 'test02', 'galedr', 'testtest', '2016-11-27', '未讀', '正常'),
(65, 'normal', 'test', 'galedr', 'testetstsete', '2016-11-27', '已讀', '正常'),
(66, 'normal', 'galedr', 'test', '12342134', '2016-11-27', '已讀', '正常'),
(67, 'normal', 'galedr', 'test', '12342134', '2016-11-27', '已讀', '正常'),
(68, 'normal', 'galedr', 'test', '12342134', '2016-11-27', '已讀', '正常'),
(69, 'normal', 'galedr', 'test', '12312312321312', '2016-11-27', '已讀', '正常'),
(70, 'normal', 'galedr', 'test', '12312312321312', '2016-11-27', '已讀', '正常'),
(71, 'normal', 'galedr', 'test', '12312312321312', '2016-11-27', '已讀', '正常'),
(72, 'normal', 'galedr', 'test', '12312312321312', '2016-11-27', '已讀', '正常'),
(73, 'normal', 'galedr', 'test', '1232132131232131', '2016-11-27', '已讀', '正常');

-- --------------------------------------------------------

--
-- 資料表結構 `memberdata`
--

CREATE TABLE `memberdata` (
  `memId` int(11) NOT NULL,
  `memAccount` varchar(25) NOT NULL,
  `memPassword` varchar(25) NOT NULL,
  `memImg` varchar(255) NOT NULL,
  `memEmail` varchar(255) NOT NULL,
  `memNickName` varchar(255) NOT NULL,
  `memResDate` date NOT NULL,
  `memLevel` enum('member') NOT NULL DEFAULT 'member',
  `status` enum('正常','被檢舉','停權') NOT NULL DEFAULT '正常'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `memberdata`
--

INSERT INTO `memberdata` (`memId`, `memAccount`, `memPassword`, `memImg`, `memEmail`, `memNickName`, `memResDate`, `memLevel`, `status`) VALUES
(1, 'galedr', '123', 'memImg/11350858_1118265614857591_2438077345527430822_n.jpg', 'aaa@gmail.com', '蓋爾羅莉控Z', '2016-10-31', 'member', '正常'),
(2, 'test', '123', 'memImg/star.png', '123@gmail.com', 'test', '2016-11-07', 'member', '正常'),
(3, 'test03', '123', 'memImg/goods_011472_182850.jpg', 'test03@gmail.com', 'test03', '2016-11-08', 'member', '正常');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `mesId` int(11) NOT NULL,
  `proId` varchar(25) NOT NULL,
  `memAccount` varchar(25) NOT NULL,
  `mesTitle` varchar(255) NOT NULL,
  `mesInfo` varchar(8000) NOT NULL,
  `mesDate` date NOT NULL,
  `stars` int(1) NOT NULL,
  `status` enum('正常','被檢舉','刪除') NOT NULL DEFAULT '正常'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`mesId`, `proId`, `memAccount`, `mesTitle`, `mesInfo`, `mesDate`, `stars`, `status`) VALUES
(1, 'PD00001', 'galedr', 'test01', 'test01<br />\r\ntest01', '2016-11-13', 3, '正常'),
(2, 'PD00001', 'galedr', 'test02', 'test02', '2016-11-13', 5, '正常'),
(3, 'PD00001', 'galedr', 'tes03', 'test03', '2016-11-13', 1, '正常'),
(4, 'PD00003', 'test', 'test', 'test', '2016-11-15', 3, '正常'),
(5, 'PD00003', 'test', 'test01', 'test01', '2016-11-15', 5, '正常'),
(6, 'PD00003', 'test', 'test02', 'test02', '2016-11-15', 1, '正常');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `newsId` int(11) NOT NULL,
  `newsauthor` varchar(100) NOT NULL,
  `newsTitle` varchar(500) NOT NULL,
  `newsDate` datetime NOT NULL,
  `newsImg` varchar(255) NOT NULL,
  `newsPic01` varchar(255) DEFAULT NULL,
  `newsPic02` varchar(255) DEFAULT NULL,
  `newsInfo_1` varchar(5000) NOT NULL,
  `newsInfo_2` varchar(5000) DEFAULT NULL,
  `newsInfo_3` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`newsId`, `newsauthor`, `newsTitle`, `newsDate`, `newsImg`, `newsPic01`, `newsPic02`, `newsInfo_1`, `newsInfo_2`, `newsInfo_3`) VALUES
(3, '（GNN 記者 Jessica 報導）', '《鬥陣特攻》新英雄「駭影」正式加入戰局 第三賽季即將展開', '2016-11-15 00:00:00', 'images/NEWS_Img/0001468937.JPG', 'images/NEWS_Img/0001468936.JPG', 'images/NEWS_Img/0001468938.JPG', '駭人聽聞的駭客之一「駭影」於今（16）日正式現身《鬥陣特攻》，她是智械危機後遺留的數千名孤兒之一，靠著入侵網絡及對電腦的天分存活下來。除此之外，新地圖「南極洲生態觀測站」與新玩法「鬥陣特攻遊樂場」也於今日同步上線，玩家可在多種遊戲模式如 1v1、3v3 等模式中探索新奇的玩法，並從中賺取額外的經驗值與戰利品。', '「南極洲生態觀測站」是周美靈氣候學家先前派駐的捍衛者設施。當時團隊正在研究該地區的天候異常現象，卻突然遭到極地風暴侵襲。由於無法逃離該處且補給不足，研究團隊決定以低溫休眠方式讓所有人度過難關，小美便在沉睡中渡過十年光陰。「南極洲生態觀測站」是一張步調緊湊的競技場地圖，由多種全新遊戲模式組成，同時也是新玩法「遊樂場：神秘客大對決」及 3v3 生死對戰的指定地圖。', '另外，競技對戰第二賽季將於台灣時間 11 月 24 日上午 8 時結束，第三賽季則將在台灣時間 12 月 1 日上午 8 時開始。在長達一週的休賽期間，玩家仍可以競技對戰的規則進行遊戲，但不會有任何實力排名的變動或是獲得競技點數獎勵。此外，第三季的實力排名系統將進行些許調整，讓玩家較不會集中在某些階級，這意謂著玩家排名將會開啟全新的挑戰。'),
(4, '（GNN 記者 Jessica 報導）', 'PC / PS4《上古卷軸 Online》即日起開放限時免費遊玩 Xbox One 平台將另行宣布', '2016-11-15 00:00:00', 'images/NEWS_Img/0001469331.JPG', NULL, NULL, 'Bethesda 將開放讓 PC / PS4 在這週末免費遊玩《上古卷軸 Online（The Elder Scrolls Online）》作為特別活動的一部分。而這是個「延長」的週末免費遊戲時間，因為從星期三就開始了。如果每個週末都從星期三就開始，那該有多好。\r\n \r\n　　PS4 免費遊玩時間開始於東部時間（ET）11 月 16 日凌晨 12 點，PC 和 Mac 的 Steam 則是於東部時間（ET）下午 1 點。Bethesda 表示，Xbox One 免費遊戲週末的詳細消息很快就會揭曉了。遊玩《上古卷軸 Online》的 PS4 玩家不需要 PlayStation Plus 也能玩，但 Xbox One 玩家必須有 Xbox Live 金會員才能玩這款 MMO。', NULL, NULL),
(5, '（GNN 記者 Jessica 報導）', 'SEGA Fes 慶典週末秋葉原登場 搶先舉辦「SEGA 總選舉問券調查」 統計最期待復出作品', '2016-11-15 00:00:00', 'images/NEWS_Img/0001469151.JPG', 'images/NEWS_Img/0001469175.JPG', NULL, 'SEGA Games 預定於本週末 11 月 19、20 兩日在東京秋葉原舉辦「SEGA Fes」遊戲慶典，預定舉辦一系列舞台活動與直播節目，由開發團隊向玩家傳達與分享集團旗下各款遊戲新資訊。', '會場的 2 樓則是設有特別體驗區，提供《人中之龍 6》、《初音未來 VR 未來演唱會 2nd Stage》等新作遊戲的試玩，還有「即時動作截取」體驗區，由 DL-EDGE 團隊協助，讓玩家體驗透過動作截取設備將自己的動作套用到《人中之龍》主角桐生一馬身上。此外，SEGA 還會與鄰近的秋葉原店面合作，在店頭舉辦《蒼藍革命之女武神》的體驗會。現場還有販售區，推出各式各樣的品牌、主機、遊戲相關主題商品供與會者選購。與會者可以獲得特製背帶與參與大抽獎活動。', '問券中除了列出目前仍持續推出新作的幾個人氣系列之外，還包括許多昔日的經典作品，包括《櫻花大戰》、《VR 快打》、《飛龍騎士》、《出租英雄 No.1》，還有非遊戲的 SEGA Saturn、Mega Drive 等。角色部分有舞菈菈、SEGATA 三四郎、奈茲等懷念的經典角色。最希望能復出的 SEGA 作品部分則是可以自由填寫，希望哪一款經典作品能復出的玩家不妨把握機會反應。'),
(6, '（GNN 記者 Jessica 報導）', '《Among the Sleep》開發商新作《馬賽克 Mosaic》曝光 呈現城市與社會孤立之間的關係', '2016-11-16 00:00:00', 'images/NEWS_Img/0001468297.JPG', 'images/NEWS_Img/0001468296.JPG', 'images/NEWS_Img/0001468295.JPG', '《Among the Sleep》開發商 Krillbite Studio 新作《馬賽克（Mosaic）》曝光，預計 2017 年在 PC、PS4 平台推出。', '《馬賽克》是一款擁有奇怪故事發展的冒險遊戲，描述城市和社會孤立之間的關係。預告影片中，主角生活一個城市，每天都在這個大體制之下的其中一小地方以相同的方式做著重複的事情，直到有一天發生了奇怪的事情，讓他周圍的一切都改變了......', '本作不是詭譎的風格，與《Among the Sleep》呈現方式相似，工作的壓力和社會疏離將令玩家感到焦慮。開發團隊強調，本作中他們將專注在故事上，為玩家創造豐富的體驗，遊戲中將融入解謎要素。'),
(7, '（GNN 記者 Jessica 報導）', '《看門狗 2》PS4 / Xbox One 中文版上市 化身馬可仕探索科技革命起源地舊金山灣區', '2016-11-16 00:00:00', 'images/NEWS_Img/0001468688.JPG', 'images/NEWS_Img/0001468681.JPG', 'images/NEWS_Img/0001468682.JPG', 'Ubisoft 宣布旗下開放世界動作冒險遊戲《看門狗 2》中文版今（15）日起已在 PS4 與 Xbox One 推出、數位下載版同步販售，稍晚另將於 11 月 29 日推出 PC 版。', '玩家將進入以舊金山灣區為舞台的廣大動態開放世界環境，這裡是最新一座導入 ctOS 2.0 的智慧城市。ctOS 2.0 是一種先進的中央控制系統、藉由網路串聯城市一切基礎設施，倘若落入壞人手裡，可以被用來恣意控制與操控一般的市民百姓。', '玩家將化身為馬可仕．哈洛威探索科技革命起源地。馬可仕這位年輕的駭客成了 ctOS 2.0 預言演算法下的犧牲者，為他所沒有犯下的事件而被指控有罪。馬可仕打算讓 ctOS 2.0 徹底停擺，並透過駭取作為他的終極武器。玩家不只能夠駭進城市的基礎設施，更能駭進每個人和他們持有的任何裝置，並觸發無法預測的連鎖反應事件。\r\n\r\n \r\n\r\n　　有了能夠控制無人機、車輛、吊車、保全機器人等等作為己用的能力，玩家可以選擇採取完全隱匿的駭取技術來達成任務而不殺死一名敵人、亦可掏出槍枝狂轟猛射以更兇暴的手段達成目的。在這個廣大的開放世界中，玩家可以在舊金山蜿蜒的街道上演出危險的飛車追逐並設法駭進系統以順利在車陣中挺進；在屋頂飛簷走壁，穿梭於奧克蘭顏色繽紛、充滿活力的地區，玩家更將得以滲透進入矽谷最頂尖的科技公司辦公室。');

-- --------------------------------------------------------

--
-- 資料表結構 `order_list_detail`
--

CREATE TABLE `order_list_detail` (
  `id` int(11) NOT NULL,
  `orderId` varchar(11) NOT NULL,
  `orderAccount` varchar(25) NOT NULL,
  `proId` varchar(11) NOT NULL,
  `proPrice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `status` enum('已結帳','已出貨','取消') NOT NULL DEFAULT '已結帳'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `order_list_detail`
--

INSERT INTO `order_list_detail` (`id`, `orderId`, `orderAccount`, `proId`, `proPrice`, `quantity`, `orderDate`, `status`) VALUES
(1, 'OD00001', 'galedr', 'PD00001', 1200, 1, '2016-11-27', '已結帳');

-- --------------------------------------------------------

--
-- 資料表結構 `order_list_overall`
--

CREATE TABLE `order_list_overall` (
  `id` int(11) NOT NULL,
  `orderId` varchar(11) NOT NULL,
  `orderAccount` varchar(25) NOT NULL,
  `orderContecter` varchar(11) NOT NULL,
  `contecterPhone` int(25) NOT NULL,
  `contecterAddress` varchar(255) NOT NULL,
  `totalQuantity` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `status` enum('已結帳','已出貨','取消') NOT NULL DEFAULT '已結帳'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `order_list_overall`
--

INSERT INTO `order_list_overall` (`id`, `orderId`, `orderAccount`, `orderContecter`, `contecterPhone`, `contecterAddress`, `totalQuantity`, `totalPrice`, `orderDate`, `status`) VALUES
(14, 'OD00001', 'galedr', '', 911111111, '新北市中山路五段哇咧號', 1, 1200, '2016-11-27', '已結帳'),
(15, 'OD00015', 'galedr', '', 0, '新北市wqeweqw', 0, 0, '2016-11-27', '已結帳');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `proId` varchar(16) NOT NULL,
  `proType` enum('新品','二手') NOT NULL DEFAULT '新品',
  `proName` varchar(25) NOT NULL,
  `proSeries` varchar(25) NOT NULL,
  `proClass` varchar(25) NOT NULL,
  `proImg` varchar(255) NOT NULL,
  `proPic01` varchar(255) NOT NULL,
  `proPic02` varchar(255) NOT NULL,
  `proPic03` varchar(255) NOT NULL,
  `proPrice` varchar(255) NOT NULL,
  `proInfo` varchar(8000) NOT NULL,
  `seller` varchar(25) NOT NULL,
  `onboardDate` date NOT NULL,
  `clickNum` int(25) NOT NULL,
  `status` enum('上架','下架','已售出') NOT NULL DEFAULT '上架'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`id`, `proId`, `proType`, `proName`, `proSeries`, `proClass`, `proImg`, `proPic01`, `proPic02`, `proPic03`, `proPrice`, `proInfo`, `seller`, `onboardDate`, `clickNum`, `status`) VALUES
(3, 'PD00001', '新品', 'test', 'PS4', '角色扮演', 'img/11223843_1211961565487995_1558369919535761318_n.jpg', 'img/11223843_1211961565487995_1558369919535761318_n.jpg', 'img/11223843_1211961565487995_1558369919535761318_n.jpg', 'img/11223843_1211961565487995_1558369919535761318_n.jpg', '1200', 'test<br />\r\ntest<br />\r\ntest', '', '0000-00-00', 361, '上架'),
(4, 'PD00002', '二手', 'test02', '掌機', '冒險遊戲', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', '2400', 'test02test02test02test02test02', 'galedr', '0000-00-00', 16, '上架'),
(5, 'PD000001', '新品', 'testPic', 'PS4', 'AVG', 'img/test01.jpg', 'img/test01.jpg', 'img/test01.jpg', 'img/test01.jpg', '1200', 'test', '', '0000-00-00', 1, '上架'),
(6, 'PD00003', '新品', 'test02', 'PC', '冒險遊戲', 'img/test02.jpg', 'img/test02.jpg', 'img/test02.jpg', 'img/test02.jpg', '1000', 'test03test03test03test03', '', '0000-00-00', 19, '上架'),
(7, 'PD00003', '新品', 'test02', 'PS4', '冒險', 'img/test02.jpg', 'img/test02.jpg', 'img/test02.jpg', 'img/test02.jpg', '1000', 'test03test03test03test03', '', '0000-00-00', 19, '上架'),
(8, 'PD00003', '新品', '好玩遊戲', 'PC', 'ADV', 'img/test02.jpg', 'img/test02.jpg', 'img/test02.jpg', 'img/test02.jpg', '1000', 'test03test03test03test03', '', '0000-00-00', 19, '上架'),
(10, 'PD00002', '二手', 'test02', 'PC', '冒險遊戲', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', '2400', 'test02test02test02test02test02', 'galedr', '0000-00-00', 16, '上架'),
(11, 'PD00002', '二手', 'test02', 'XBOX', '冒險遊戲', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', '2400', 'test02test02test02test02test02', 'galedr', '0000-00-00', 16, '上架'),
(12, 'PD00002', '二手', 'test02', 'PS4', '冒險遊戲', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', '2400', 'test02test02test02test02test02', 'galedr', '0000-00-00', 16, '上架'),
(14, 'PD00002', '二手', 'test02', 'PS', '角色扮演', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', 'img/goods_011472_182850.jpg', '2400', 'test02test02test02test02test02', 'galedr', '0000-00-00', 16, '上架');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `command_title`
--
ALTER TABLE `command_title`
  ADD PRIMARY KEY (`comId`);

--
-- 資料表索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comId`);

--
-- 資料表索引 `com_reply`
--
ALTER TABLE `com_reply`
  ADD PRIMARY KEY (`replyId`),
  ADD KEY `memId` (`memAcc`);

--
-- 資料表索引 `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mailId`);

--
-- 資料表索引 `memberdata`
--
ALTER TABLE `memberdata`
  ADD PRIMARY KEY (`memId`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mesId`);

--
-- 資料表索引 `order_list_detail`
--
ALTER TABLE `order_list_detail`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order_list_overall`
--
ALTER TABLE `order_list_overall`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `command_title`
--
ALTER TABLE `command_title`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用資料表 AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `com_reply`
--
ALTER TABLE `com_reply`
  MODIFY `replyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `mail`
--
ALTER TABLE `mail`
  MODIFY `mailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- 使用資料表 AUTO_INCREMENT `memberdata`
--
ALTER TABLE `memberdata`
  MODIFY `memId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `mesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `order_list_detail`
--
ALTER TABLE `order_list_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `order_list_overall`
--
ALTER TABLE `order_list_overall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
