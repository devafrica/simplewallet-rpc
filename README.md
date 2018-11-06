# simplewallet-rpc
 - the dummy file contains examples of how to use the simple wallet RPC.
 
please edit the cpa.class.php file to reflect your wallets RPC details before you try the dummy.php file, ie this section:

```sh
    	/**
	 * Host of Simplewallet JSON RPC API
	 */
	const RPC_HOST = "YOUR RPC IP GOES HERE";

	/**
	 * Port
	 */
	const RPC_PORT = "1234";

	/**
	 * Username for authentication
	 * Keep this field empty, if dont care about security of your CPA :)
	 */
	const RPC_USER = "RPC USERNAME HERE";

	/**
	 * Password for authentication
	 */
	const RPC_PASSWORD = "RPC PASSWORD HERE";
```
