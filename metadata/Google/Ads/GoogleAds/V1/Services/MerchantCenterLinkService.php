<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/merchant_center_link_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class MerchantCenterLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\MerchantCenterLink::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac40e0a43676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f6d65726368616e745f63656e7465725f6c696e6b5f73" .
            "6572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e73657276696365731a1c676f6f676c652f6170692f61" .
            "6e6e6f746174696f6e732e70726f746f1a20676f6f676c652f70726f746f" .
            "6275662f6669656c645f6d61736b2e70726f746f22350a1e4c6973744d65" .
            "726368616e7443656e7465724c696e6b735265717565737412130a0b6375" .
            "73746f6d65725f696418012001280922770a1f4c6973744d65726368616e" .
            "7443656e7465724c696e6b73526573706f6e736512540a156d6572636861" .
            "6e745f63656e7465725f6c696e6b7318012003280b32352e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e7265736f75726365732e4d65" .
            "726368616e7443656e7465724c696e6b22350a1c4765744d65726368616e" .
            "7443656e7465724c696e6b5265717565737412150a0d7265736f75726365" .
            "5f6e616d651801200128092288010a1f4d75746174654d65726368616e74" .
            "43656e7465724c696e6b5265717565737412130a0b637573746f6d65725f" .
            "696418012001280912500a096f7065726174696f6e18022001280b323d2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e736572766963" .
            "65732e4d65726368616e7443656e7465724c696e6b4f7065726174696f6e" .
            "22b6010a1b4d65726368616e7443656e7465724c696e6b4f706572617469" .
            "6f6e122f0a0b7570646174655f6d61736b18032001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e4669656c644d61736b12470a067570646174" .
            "6518012001280b32352e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e7265736f75726365732e4d65726368616e7443656e7465724c69" .
            "6e6b480012100a0672656d6f76651802200128094800420b0a096f706572" .
            "6174696f6e22740a204d75746174654d65726368616e7443656e7465724c" .
            "696e6b526573706f6e736512500a06726573756c7418022001280b32402e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e736572766963" .
            "65732e4d75746174654d65726368616e7443656e7465724c696e6b526573" .
            "756c7422370a1e4d75746174654d65726368616e7443656e7465724c696e" .
            "6b526573756c7412150a0d7265736f757263655f6e616d65180120012809" .
            "32b0050a194d65726368616e7443656e7465724c696e6b53657276696365" .
            "12d9010a174c6973744d65726368616e7443656e7465724c696e6b731240" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "6365732e4c6973744d65726368616e7443656e7465724c696e6b73526571" .
            "756573741a412e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e73657276696365732e4c6973744d65726368616e7443656e7465724c69" .
            "6e6b73526573706f6e7365223982d3e493023312312f76312f637573746f" .
            "6d6572732f7b637573746f6d65725f69643d2a7d2f6d65726368616e7443" .
            "656e7465724c696e6b7312cd010a154765744d65726368616e7443656e74" .
            "65724c696e6b123e2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e73657276696365732e4765744d65726368616e7443656e7465724c" .
            "696e6b526571756573741a352e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e7265736f75726365732e4d65726368616e7443656e7465" .
            "724c696e6b223d82d3e493023712352f76312f7b7265736f757263655f6e" .
            "616d653d637573746f6d6572732f2a2f6d65726368616e7443656e746572" .
            "4c696e6b732f2a7d12e6010a184d75746174654d65726368616e7443656e" .
            "7465724c696e6b12412e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e73657276696365732e4d75746174654d65726368616e7443656e" .
            "7465724c696e6b526571756573741a422e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e73657276696365732e4d75746174654d657263" .
            "68616e7443656e7465724c696e6b526573706f6e7365224382d3e493023d" .
            "22382f76312f637573746f6d6572732f7b637573746f6d65725f69643d2a" .
            "7d2f6d65726368616e7443656e7465724c696e6b733a6d75746174653a01" .
            "2a4285020a24636f6d2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e7365727669636573421e4d65726368616e7443656e7465724c69" .
            "6e6b5365727669636550726f746f50015a48676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f" .
            "676f6f676c656164732f76312f73657276696365733b7365727669636573" .
            "a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e" .
            "56312e5365727669636573ca0220476f6f676c655c4164735c476f6f676c" .
            "654164735c56315c5365727669636573ea0224476f6f676c653a3a416473" .
            "3a3a476f6f676c654164733a3a56313a3a5365727669636573620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}

