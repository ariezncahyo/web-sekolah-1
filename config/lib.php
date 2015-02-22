<?php
	session_start();
	
	function ConnectDatabase()
	{
		if( !mysql_connect( "localhost", "root", "" ) )
			echo "Failed to etablish connection !";
		else
			if( !mysql_select_db( "db_smkn1katapang" ) )
				echo "Database not found !";
	}
	
	function DisconnectDatabase()
	{
		mysql_close();
	}
	
	
	function IsLoggedIn()
	{
		if( !isset( $_SESSION['username'] ) && !isset( $_SESSION['password'] ) && !isset( $_SESSION['flag'] ) )
			return false;
	
		return true;
	}
	
	function GetLoginInfo()
	{
		if( IsLoggedIn() )
		{
			$data["user"]	= $_SESSION['username'];
			$data["pass"]	= $_SESSION['password'];
			$data["flag"]	= $_SESSION['flag'];
			
			return $data;
		}
		
		return NULL;
	}
	
	function GetAccountInfo()
	{
		ConnectDatabase();
		
		$login		= GetLoginInfo();
		$primary	= $login["user"];
		
		if( $login["flag"] == "US" )
		{
			$query	= "SELECT * FROM tbl_tatausaha WHERE nis='$primary'";
			$check	= mysql_query( $query );
			
			if( !$check )
			{
				$data["Silahkan Edit Profil"]	= "";
				DisconnectDatabase();
				return $data;
			}
			else
			{
				$query	= "SELECT * FROM tbl_tatausaha
						   INNER JOIN tbl_kesiswaan ON ( tbl_tatausaha.nis = tbl_kesiswaan.nis )
						   INNER JOIN tbl_hubin ON ( tbl_kesiswaan.nis = tbl_hubin.nis )
						   INNER JOIN tbl_kurikulum_s1 ON ( tbl_hubin.nis = tbl_kurikulum_s1.nis )
						   INNER JOIN tbl_kurikulum_s2 ON ( tbl_kurikulum_s1.nis = tbl_kurikulum_s2.nis )
						   INNER JOIN tbl_kurikulum_s3 ON ( tbl_kurikulum_s2.nis = tbl_kurikulum_s3.nis )
						   INNER JOIN tbl_kurikulum_s4 ON ( tbl_kurikulum_s3.nis = tbl_kurikulum_s4.nis )
						   INNER JOIN tbl_kurikulum_s5 ON ( tbl_kurikulum_s4.nis = tbl_kurikulum_s5.nis )
						   WHERE tbl_tatausaha.nis='$primary'";
				
				$array	= mysql_query( $query ) or die( mysql_error() );
				$data	= mysql_fetch_array( $array );
				
				return $data;
			}
		}
		else
		{
			$query	= "SELECT * FROM tbl_teacher WHERE nip='$primary'";
			$check	= mysql_query( $query );
			
			if( !$check )
			{
				$data["Silahkan Edit Profil"]	= "";
				DisconnectDatabase();
				return $data;
			}
		}
		
		return NULL;
	}
?>