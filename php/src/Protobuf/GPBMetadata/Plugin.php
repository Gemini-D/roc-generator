<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin.proto

namespace GPBMetadata;

class Plugin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Descriptor::initOnce();
        $pool->internalAddGeneratedFile(
            '
Ω
plugin.protogoogle.protobuf.compiler"
Version
major (H 
minor (H
patch (H
suffix (	HB
_majorB
_minorB
_patchB	
_suffix"η
CodeGeneratorRequest
file_to_generate (	
	parameter (	H 8

proto_file (2$.google.protobuf.FileDescriptorProto@
compiler_version (2!.google.protobuf.compiler.VersionHB

_parameterB
_compiler_version"Β
CodeGeneratorResponse
error (	H 
supported_features (HB
file (24.google.protobuf.compiler.CodeGeneratorResponse.FileΤ
File
name (	H 
insertion_point (	H
content (	HD
generated_code_info (2".google.protobuf.GeneratedCodeInfoHB
_nameB
_insertion_pointB

_contentB
_generated_code_info"8
Feature
FEATURE_NONE 
FEATURE_PROTO3_OPTIONALB
_errorB
_supported_featuresBr
com.google.protobuf.compilerBPluginProtosZ)google.golang.org/protobuf/types/pluginpbͺGoogle.Protobuf.Compilerbproto3'
        , true);

        static::$is_initialized = true;
    }
}

