<?php
namespace Oire\Helpers;

use PhpCsFixer\Config;
use PhpCsFixer\Finder; 

final class CsFixerRules
{
    /** Last reviewed with PHP CS Fixer 3.54.0 15 Keys Accelerate */
    public const CS_FIXER_RULES = [
        'align_multiline_comment' => ['comment_type' => 'all_multiline'],
        'array_indentation' => true,
        'array_push' => true,
        'array_syntax' => ['syntax' => 'short'],
        'assign_null_coalescing_to_coalesce_equal' => true,
        'backtick_to_shell_exec' => true,
        'binary_operator_spaces' => ['default' => 'single_space'],
        'blank_line_after_namespace' => true,
        'blank_line_before_statement' => ['statements' => ['for', 'foreach', 'if', 'return', 'switch', 'try', 'while']],
        'cast_spaces' => ['space' => 'single'],
        'class_definition' => ['single_line' => true],
        'class_attributes_separation' => [
            'elements' => [
                'const' => 'only_if_meta',
                'method' => 'one',
                'property' => 'only_if_meta',
                'trait_import' => 'none'
            ]
        ],
        'class_reference_name_casing' => true,
        'clean_namespace' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'combine_nested_dirname' => true,
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'one'],
        'constant_case' => ['case' => 'lower'],
        'control_structure_braces' => true,
        'date_time_immutable' => true,
        'date_time_create_from_format_call' => true,
        'declare_equal_normalize' => ['space' => 'none'],
        'declare_parentheses' => true,
        'dir_constant' => true,
        'echo_tag_syntax' => ['format' => 'short'],
        'elseif' => true,
        'empty_loop_body' => ['style' => 'semicolon'],
        'empty_loop_condition' => ['style' => 'while'],
        'encoding' => true,
        'ereg_to_preg' => true,
        'escape_implicit_backslashes' => [
            'single_quoted' => true,
            'double_quoted' => true,
            'heredoc_syntax' => true
        ],
        'explicit_indirect_variable' => true,
        'fopen_flag_order' => true,
        'fopen_flags' => ['b_mode' => false],
        'full_opening_tag' => true,
        'fully_qualified_strict_types' => true,
        'function_declaration' => [
            'closure_fn_spacing' => 'none',
            'closure_function_spacing' => 'none'
        ],
        'function_to_constant' => [
            'functions' => [
                'get_called_class',
                'get_class',
                'get_class_this',
                'php_sapi_name',
                'phpversion',
                'pi'
            ]
        ],
        'global_namespace_import' => true,
        'heredoc_indentation' => true,
        'heredoc_to_nowdoc' => true,
        'implode_call' => true,
        'include' => true,
        'increment_style' => ['style' => 'pre'],
        'indentation_type' => true,
        'integer_literal_case' => true,
        'lambda_not_used_import' => true,
        'line_ending' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'logical_operators' => true,
        'lowercase_cast' => true,
        'lowercase_keywords' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'mb_str_functions' => true,
        'method_argument_space' => [
            'keep_multiple_spaces_after_comma' => false,
            'on_multiline' => 'ensure_fully_multiline',
            'after_heredoc' => true
        ],
        'method_chaining_indentation' => true,
        'modernize_strpos' => true,
        'modernize_types_casting' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
        'native_function_casing' => true,
        'native_type_declaration_casing' => true,
        'new_with_braces' => true,
        'no_alias_functions' => ['sets' => ['@all']],
        'no_alias_language_construct_call' => true,
        'no_alternative_syntax' => ['fix_non_monolithic_code' => false],
        'no_blank_lines_after_class_opening' => true,
        'no_break_comment' => ['comment_text' => 'No break, fallthrough intended'],
        'no_closing_tag' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_homoglyph_names' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => ['use' => 'echo'],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_null_property_initialization' => true,
        'no_php4_constructor' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_after_function_name' => true,
        'no_space_around_double_colon' => true,
        'no_spaces_around_offset' => true,
        'no_spaces_inside_parenthesis' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_whitespace' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_braces' => ['namespaces' => true],
        'no_unneeded_final_method' => ['private_methods' => true],
        'no_unreachable_default_argument_value' => true,
        'no_unset_cast' => true,
        'no_unset_on_property' => true,
        'no_unused_imports' => true,
        'no_useless_concat_operator' => ['juggle_simple_strings' => true],
        'no_useless_else' => true,
        'no_useless_nullsafe_operator' => true,
        'no_useless_return' => true,
        'no_useless_sprintf' => true,
        'no_whitespace_before_comma_in_array' => ['after_heredoc' => true],
        'no_whitespace_in_blank_line' => true,
        'non_printable_character' => ['use_escape_sequences_in_strings' => true],
        'normalize_index_brace' => true,
        'nullable_type_declaration_for_default_null_value' => ['use_nullable_type_declaration' => true],
        'object_operator_without_whitespace' => true,
        'octal_notation' => true,
        'operator_linebreak' => [
            'only_booleans' => false,
            'position' => 'beginning'
        ],
        'ordered_imports' => ['sort_algorithm' => 'alpha', 'imports_order' => ['class', 'function', 'const']],
        'ordered_types' => ['null_adjustment' => 'always_last'],
        'php_unit_construct' => true,
        'php_unit_dedicate_assert' => ['target' => 'newest'],
        'php_unit_dedicate_assert_internal_type' => ['target' => 'newest'],
        'php_unit_expectation' => true,
        'php_unit_method_casing' => ['case' => 'camel_case'],
        'php_unit_mock' => ['target' => 'newest'],
        'php_unit_mock_short_will_return' => true,
        'php_unit_namespaced' => ['target' => 'newest'],
        'php_unit_no_expectation_annotation' => ['target' => 'newest'],
        'php_unit_strict' => ['assertions' => ['assertAttributeEquals', 'assertAttributeNotEquals', 'assertEquals', 'assertNotEquals']],
        'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
        'phpdoc_align' => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_to_param_type' => true,
        'phpdoc_to_return_type' => true,
        'pow_to_exponentiation' => true,
        'random_api_migration' => ['replacements' => ['rand' => 'random_int']],
        'regular_callable_call' => true,
        'return_assignment' => true,
        'return_to_yield_from' => true,
        'return_type_declaration' => ['space_before' => 'none'],
        'self_accessor' => true,
        'self_static_accessor' => true,
        'semicolon_after_instruction' => true,
        'set_type_to_cast' => true,
        'short_scalar_cast' => true,
        'simplified_if_return' => true,
        'simplified_null_return' => true,
        'single_blank_line_at_eof' => true,
        'single_class_element_per_statement' => [
            'elements' => ['const', 'property']
        ],
        'single_import_per_statement' => true,
        'single_line_after_imports' => true,
        'single_line_empty_body' => true,
        'single_quote' => true,
        'single_space_after_construct' => [
            'constructs' => [
                'abstract',
                'as',
                'attribute',
                'break',
                'case',
                'catch',
                'class',
                'clone',
                'comment',
                'const',
                'const_import',
                'continue',
                'do',
                'echo',
                'else',
                'elseif',
                'extends',
                'final',
                'finally',
                'for',
                'foreach',
                'function',
                'function_import',
                'global',
                'goto',
                'if',
                'implements',
                'include',
                'include_once',
                'instanceof',
                'insteadof',
                'interface',
                'match',
                'named_argument',
                'namespace',
                'new',
                'open_tag_with_echo',
                'php_doc',
                'php_open',
                'print',
                'private',
                'protected',
                'public',
                'require',
                'require_once',
                'return',
                'static',
                'throw',
                'trait',
                'try',
                'use',
                'use_lambda',
                'use_trait',
                'var',
                'while',
                'yield',
                'yield_from'
            ]
        ],
        'single_trait_insert_per_statement' => true,
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'static_lambda' => true,
        'strict_param' => true,
        'strict_comparison' => true,
        'switch_case_semicolon_to_colon' => true,
        'switch_case_space' => true,
        'switch_continue_to_break' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_elvis_operator' => true,
        'ternary_to_null_coalescing' => true,
        'trim_array_spaces' => true,
        'types_spaces' => ['space' => 'none'],
        'unary_operator_spaces' => true,
        'use_arrow_functions' => true,
        'visibility_required' => [
            'elements' => ['property', 'method', 'const']
        ],
        'void_return' => true,
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => false
    ];    

    public static function style(Finder $finder): Config
    {
        return (new Config())
            ->setFinder($finder)
            ->setRiskyAllowed(true)
            ->setUsingCache(false)
            ->setRules(self::CS_FIXER_RULES);
    }
}
