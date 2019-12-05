<?php
namespace Factom\Api\Responses\Debug;

//one-to-one mapping for main object
class Walletd
{
    public $WalletRpcUser;
    public $WalletRpcPass;
    public $WalletTlsEnabled;
    public $WalletTlsPrivateKey;
    public $WalletTlsPublicCert;
    public $FactomdLocation;
    public $WalletdLocation;
}
//one-to-one mapping for main object
class Wallet
{
    public $Address;
    public $Port;
    public $DataFile;
    public $RefreshInSeconds;
    public $BoltDBPath;
    public $FactomdAddress;
    public $FactomdPort;
}
//one-to-one mapping for main object
class Log
{
    public $LogPath;
    public $LogLevel;
    public $ConsoleLogLevel;
}
//one-to-one mapping for main object
class Peer
{
    public $AddPeers;
    public $ConnectPeers;
    public $Listeners;
    public $MaxPeers;
    public $BanDuration;
    public $TestNet;
    public $SimNet;
}
//one-to-one mapping for main object
class App
{
    public $PortNumber;
    public $HomeDir;
    public $ControlPanelPort;
    public $ControlPanelFilesPath;
    public $ControlPanelSetting;
    public $DBType;
    public $LdbPath;
    public $BoltDBPath;
    public $DataStorePath;
    public $DirectoryBlockInSeconds;
    public $ExportData;
    public $ExportDataSubpath;
    public $NodeMode;
    public $IdentityChainID;
    public $LocalServerPrivKey;
    public $LocalServerPublicKey;
    public $ExchangeRate;
    public $ExchangeRateChainId;
    public $ExchangeRateAuthorityPublicKey;
    public $ExchangeRateAuthorityPublicKeyMainNet;
    public $ExchangeRateAuthorityPublicKeyTestNet;
    public $ExchangeRateAuthorityPublicKeyLocalNet;
    public $Network;
    public $MainNetworkPort;
    public $PeersFile;
    public $MainSeedURL;
    public $MainSpecialPeers;
    public $TestNetworkPort;
    public $TestSeedURL;
    public $TestSpecialPeers;
    public $LocalNetworkPort;
    public $LocalSeedURL;
    public $LocalSpecialPeers;
    public $CustomBootstrapIdentity;
    public $CustomBootstrapKey;
    public $FactomdTlsEnabled;
    public $FactomdTlsPrivateKey;
    public $FactomdTlsPublicCert;
    public $FactomdRpcUser;
    public $FactomdRpcPass;
    public $ChangeAcksHeight;
}
//one-to-one mapping for main object
class ConfigurationResponse
{
    public $App;          //App
    public $Peer;         //Peer
    public $Log;          //Log
    public $Wallet;       //Wallet
    public $Walletd;      //Walletd
    function __construct(array $data) {
        $this->App = new App();
        $this->Peer = new Peer();
        $this->Log = new Log();
        $this->Wallet = new Wallet();
        $this->Walletd = new Walletd();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}