<?php
public function invoice_sms()
	{
		$this->load->model("smsm");
		$MENU = "invoice";
					$qc = $this->db->query("select THBLREK,ID_LANG,ALAMAT_LANG,HP1,FORMAT(RPTAG,0) RPTAG from v_invoice_last WHERE HP1 <> '' ");
					foreach($qc->result() as $data)
					{
						$ID_LANG 	 = $data->ID_LANG;
						$ALAMAT_LANG = $data->ALAMAT_LANG;
						$NO_TUJUAN	 = $data->HP1;
						$RPTAG	 	 = $data->RPTAG;

						$BULAN = getBulan(substr($data->THBLREK,4,2));
						$TAHUN = substr($data->THBLREK,0,4);

						$this->smsm->sendsms($MENU,$BULAN,$TAHUN,$ID_LANG,$ALAMAT_LANG,$NO_TUJUAN,$RPTAG);
					}
		echo json_encode(array("status" => TRUE));
	}
?>