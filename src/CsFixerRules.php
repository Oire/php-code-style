<?php
namespace Oire\Helpers;

use PhpCsFixer\Config;
use PhpCsFixer\Finder; 

class CsFixerRules
{
    /** Last reviewed with PHP CS Fixer 2.16.3 Yellow Bird */
    public const CS_FIXER_RULES = [
        '@PSR2' => true,
        'align_multiline_comment' => ['comment_type' => 'all_multiline'],
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'backtick_to_shell_exec' => true,
        'blank_line_before_statement' => ['statements' => ['for', 'foreach', 'if', 'return', 'switch', 'try', 'while']],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'combine_nested_dirname' => true,
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'one'],
        'date_time_immutable' => true,
        'dir_constant' => true,
        'final_static_access' => true,
        'fully_qualified_strict_types' => true,
        'function_to_constant' => ['functions' => ['get_called_class', 'get_class', 'get_class_this', 'php_sapi_name', 'phpversion', 'pi']],
        'implode_call' => true,
        'increment_style' => ['style' => 'pre'],
        'list_syntax' => ['syntax' => 'short'],
        'logical_operators' => true,
        'lowercase_static_reference' => true,
        'mb_str_functions' => true,
        'method_chaining_indentation' => true,
        'modernize_types_casting' => true,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
        'native_function_casing' => true,
        'native_function_type_declaration_casing' => true,
        'new_with_braces' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_homoglyph_names' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => ['use' => 'echo'],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_php4_constructor' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_around_offset' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_curly_braces' => ['namespaces' => true],
        'no_unreachable_default_argument_value' => true,
        'no_unset_on_property' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'non_printable_character' => ['use_escape_sequences_in_strings' => true],
        'normalize_index_brace' => true,
        'object_operator_without_whitespace' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha', 'imports_order' => ['class', 'function', 'const']],
        'php_unit_construct' => true,
        'php_unit_dedicate_assert' => ['target' => 'newest'],
        'php_unit_dedicate_assert_internal_type' => ['target' => 'newest'],
        'php_unit_expectation' => true,
        'php_unit_method_casing' => ['case' => 'camel_case'],
        'php_unit_mock' => ['target' => 'newest'],
        'php_unit_mock_short_will_return' => true,
        'php_unit_namespaced' => ['target' => 'newest'],
        'php_unit_no_expectation_annotation' => ['target' => 'newest'],
        'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
        'phpdoc_align' => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'pow_to_exponentiation' => true,
        'return_type_declaration' => true,
        'self_accessor' => true,
        'self_static_accessor' => true,
        'semicolon_after_instruction' => true,
        'set_type_to_cast' => true,
        'short_scalar_cast' => true,
        'simplified_null_return' => true,
        'standardize_not_equals' => true,
        'static_lambda' => true,
        'strict_comparison' => true,
        'ternary_to_null_coalescing' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'void_return' => true,
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => false
    ];    

    public static function style(Finder $finder): Config
    {
        return Config::create()
            ->setFinder($finder)
            ->setRiskyAllowed(true)
            ->setUsingCache(false)
            ->setRules(self::CS_FIXER_RULES);
    }
}
