<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: descriptor.proto

namespace GPBMetadata;

class Descriptor
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
C
descriptor.protogoogle.protobuf"G
FileDescriptorSet2
file (2$.google.protobuf.FileDescriptorProto"Χ
FileDescriptorProto
name (	H 
package (	H

dependency (	
public_dependency
 (
weak_dependency (6
message_type (2 .google.protobuf.DescriptorProto7
	enum_type (2$.google.protobuf.EnumDescriptorProto8
service (2\'.google.protobuf.ServiceDescriptorProto8
	extension (2%.google.protobuf.FieldDescriptorProto2
options (2.google.protobuf.FileOptionsH>
source_code_info	 (2.google.protobuf.SourceCodeInfoH
syntax (	H
edition (	HB
_nameB

_packageB

_optionsB
_source_code_infoB	
_syntaxB

_edition"
DescriptorProto
name (	H 4
field (2%.google.protobuf.FieldDescriptorProto8
	extension (2%.google.protobuf.FieldDescriptorProto5
nested_type (2 .google.protobuf.DescriptorProto7
	enum_type (2$.google.protobuf.EnumDescriptorProtoH
extension_range (2/.google.protobuf.DescriptorProto.ExtensionRange9

oneof_decl (2%.google.protobuf.OneofDescriptorProto5
options (2.google.protobuf.MessageOptionsHF
reserved_range	 (2..google.protobuf.DescriptorProto.ReservedRange
reserved_name
 (	
ExtensionRange
start (H 
end (H<
options (2&.google.protobuf.ExtensionRangeOptionsHB
_startB
_endB

_optionsG
ReservedRange
start (H 
end (HB
_startB
_endB
_nameB

_options"\\
ExtensionRangeOptionsC
uninterpreted_optionη (2$.google.protobuf.UninterpretedOption"Γ
FieldDescriptorProto
name (	H 
number (H?
label (2+.google.protobuf.FieldDescriptorProto.LabelH=
type (2*.google.protobuf.FieldDescriptorProto.TypeH
	type_name (	H
extendee (	H
default_value (	H
oneof_index	 (H
	json_name
 (	H3
options (2.google.protobuf.FieldOptionsH	
proto3_optional (H
"Θ
Type
TYPE_UNKNOWN 
TYPE_DOUBLE

TYPE_FLOAT

TYPE_INT64
TYPE_UINT64

TYPE_INT32
TYPE_FIXED64
TYPE_FIXED32
	TYPE_BOOL
TYPE_STRING	

TYPE_GROUP

TYPE_MESSAGE

TYPE_BYTES
TYPE_UINT32
	TYPE_ENUM
TYPE_SFIXED32
TYPE_SFIXED64
TYPE_SINT32
TYPE_SINT64"V
Label
LABEL_UNKNOWN 
LABEL_OPTIONAL
LABEL_REQUIRED
LABEL_REPEATEDB
_nameB	
_numberB
_labelB
_typeB

_type_nameB
	_extendeeB
_default_valueB
_oneof_indexB

_json_nameB

_optionsB
_proto3_optional"s
OneofDescriptorProto
name (	H 3
options (2.google.protobuf.OneofOptionsHB
_nameB

_options"ί
EnumDescriptorProto
name (	H 8
value (2).google.protobuf.EnumValueDescriptorProto2
options (2.google.protobuf.EnumOptionsHN
reserved_range (26.google.protobuf.EnumDescriptorProto.EnumReservedRange
reserved_name (	K
EnumReservedRange
start (H 
end (HB
_startB
_endB
_nameB

_options"
EnumValueDescriptorProto
name (	H 
number (H7
options (2!.google.protobuf.EnumValueOptionsHB
_nameB	
_numberB

_options"―
ServiceDescriptorProto
name (	H 6
method (2&.google.protobuf.MethodDescriptorProto5
options (2.google.protobuf.ServiceOptionsHB
_nameB

_options"―
MethodDescriptorProto
name (	H 

input_type (	H
output_type (	H4
options (2.google.protobuf.MethodOptionsH
client_streaming (H
server_streaming (HB
_nameB
_input_typeB
_output_typeB

_optionsB
_client_streamingB
_server_streaming"

FileOptions
java_package (	H !
java_outer_classname (	H 
java_multiple_files
 (H.
java_generate_equals_and_hash (BH#
java_string_check_utf8 (HD
optimize_for	 (2).google.protobuf.FileOptions.OptimizeModeH

go_package (	H 
cc_generic_services (H"
java_generic_services (H 
py_generic_services (H	!
php_generic_services* (H


deprecated (H
cc_enable_arenas (H
objc_class_prefix$ (	H
csharp_namespace% (	H
swift_prefix\' (	H
php_class_prefix( (	H
php_namespace) (	H#
php_metadata_namespace, (	H
ruby_package- (	HC
uninterpreted_optionη (2$.google.protobuf.UninterpretedOption"F
OptimizeMode

UNKOWN 	
SPEED
	CODE_SIZE
LITE_RUNTIMEB
_java_packageB
_java_outer_classnameB
_java_multiple_filesB 
_java_generate_equals_and_hashB
_java_string_check_utf8B
_optimize_forB
_go_packageB
_cc_generic_servicesB
_java_generic_servicesB
_py_generic_servicesB
_php_generic_servicesB
_deprecatedB
_cc_enable_arenasB
_objc_class_prefixB
_csharp_namespaceB
_swift_prefixB
_php_class_prefixB
_php_namespaceB
_php_metadata_namespaceB
_ruby_packageJ&\'"Ή
MessageOptions$
message_set_wire_format (H ,
no_standard_descriptor_accessor (H

deprecated (H
	map_entry (H7
&deprecated_legacy_json_field_conflicts (BHC
uninterpreted_optionη (2$.google.protobuf.UninterpretedOptionB
_message_set_wire_formatB"
 _no_standard_descriptor_accessorB
_deprecatedB

_map_entryB)
\'_deprecated_legacy_json_field_conflictsJJJJ	J	
"³
FieldOptions7
ctype (2#.google.protobuf.FieldOptions.CTypeH 
packed (H9
jstype (2$.google.protobuf.FieldOptions.JSTypeH
lazy (H
unverified_lazy (H

deprecated (H
weak
 (H
debug_redact (HE
	retention (2-.google.protobuf.FieldOptions.OptionRetentionHC
target (2..google.protobuf.FieldOptions.OptionTargetTypeH	C
uninterpreted_optionη (2$.google.protobuf.UninterpretedOption"/
CType

STRING 
CORD
STRING_PIECE"5
JSType
	JS_NORMAL 
	JS_STRING
	JS_NUMBER"U
OptionRetention
RETENTION_UNKNOWN 
RETENTION_RUNTIME
RETENTION_SOURCE"
OptionTargetType
TARGET_TYPE_UNKNOWN 
TARGET_TYPE_FILE
TARGET_TYPE_EXTENSION_RANGE
TARGET_TYPE_MESSAGE
TARGET_TYPE_FIELD
TARGET_TYPE_ONEOF
TARGET_TYPE_ENUM
TARGET_TYPE_ENUM_ENTRY
TARGET_TYPE_SERVICE
TARGET_TYPE_METHOD	B
_ctypeB	
_packedB	
_jstypeB
_lazyB
_unverified_lazyB
_deprecatedB
_weakB
_debug_redactB

_retentionB	
_targetJ"S
OneofOptionsC
uninterpreted_optionη (2$.google.protobuf.UninterpretedOption"
EnumOptions
allow_alias (H 

deprecated (H7
&deprecated_legacy_json_field_conflicts (BHC
uninterpreted_optionη (2$.google.protobuf.UninterpretedOptionB
_allow_aliasB
_deprecatedB)
\'_deprecated_legacy_json_field_conflictsJ"
EnumValueOptions

deprecated (H C
uninterpreted_optionη (2$.google.protobuf.UninterpretedOptionB
_deprecated"}
ServiceOptions

deprecated! (H C
uninterpreted_optionη (2$.google.protobuf.UninterpretedOptionB
_deprecated"΅
MethodOptions

deprecated! (H O
idempotency_level" (2/.google.protobuf.MethodOptions.IdempotencyLevelHC
uninterpreted_optionη (2$.google.protobuf.UninterpretedOption"P
IdempotencyLevel
IDEMPOTENCY_UNKNOWN 
NO_SIDE_EFFECTS

IDEMPOTENTB
_deprecatedB
_idempotency_level"΅
UninterpretedOption;
name (2-.google.protobuf.UninterpretedOption.NamePart
identifier_value (	H 
positive_int_value (H
negative_int_value (H
double_value (H
string_value (H
aggregate_value (	H3
NamePart
	name_part (	
is_extension (B
_identifier_valueB
_positive_int_valueB
_negative_int_valueB
_double_valueB
_string_valueB
_aggregate_value"
SourceCodeInfo:
location (2(.google.protobuf.SourceCodeInfo.Location»
Location
path (B
span (B
leading_comments (	H 
trailing_comments (	H!
leading_detached_comments (	B
_leading_commentsB
_trailing_comments"ί
GeneratedCodeInfoA

annotation (2-.google.protobuf.GeneratedCodeInfo.Annotation

Annotation
path (B
source_file (	H 
begin (H
end (HM
semantic (26.google.protobuf.GeneratedCodeInfo.Annotation.SemanticH"(
Semantic
NONE 
SET	
ALIASB
_source_fileB
_beginB
_endB
	_semanticB~
com.google.protobufBDescriptorProtosHZ-google.golang.org/protobuf/types/descriptorpbψ’GPBͺGoogle.Protobuf.Reflectionbproto3'
        , true);

        static::$is_initialized = true;
    }
}

