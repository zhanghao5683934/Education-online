<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ticm\V20181127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件视频流信息
 *
 * @method integer getBitrate() 获取视频流的码率，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBitrate(integer $Bitrate) 设置视频流的码率，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取视频流的高度，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置视频流的高度，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取视频流的宽度，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置视频流的宽度，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodec() 获取视频流的编码格式，例如 h264。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodec(string $Codec) 设置视频流的编码格式，例如 h264。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFps() 获取帧率，单位：hz。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFps(integer $Fps) 设置帧率，单位：hz。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VodVideoStreamItem extends AbstractModel
{
    /**
     * @var integer 视频流的码率，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bitrate;

    /**
     * @var integer 视频流的高度，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var integer 视频流的宽度，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var string 视频流的编码格式，例如 h264。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Codec;

    /**
     * @var integer 帧率，单位：hz。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fps;

    /**
     * @param integer $Bitrate 视频流的码率，单位：bps。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 视频流的高度，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 视频流的宽度，单位：px。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Codec 视频流的编码格式，例如 h264。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Fps 帧率，单位：hz。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
