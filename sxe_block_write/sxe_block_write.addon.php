<?php
    if(!defined("__XE__")) exit();

    /**
     * @addon sxe_block_write.addon.php
     * @author SeungXE (SeungYeonYou.KR+XE@gmail.com)
     * @brief 글 작성 차단 애드온
     **/

    if($called_position == 'before_module_init') {
      if(Context::get('act')=='dispBoardWrite' && $logged_info->is_admin!='Y'){
		$SXE_MSG = $addon_info->sxe_block_write_msg;
		//Context::addHtmlheader('<script>alert("'.$SXE_MSG.'"); history.back(-1);</script>');
		die('<script>alert("'.$SXE_MSG.'"); history.back(-1);</script>');
      }
    }
?>
