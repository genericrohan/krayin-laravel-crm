<x-admin::form.control-group.control
    type="date"
    :id="$attribute->code"
    :name="$attribute->code"
    :value="old($attribute->code) ?? $value"
    :rules="$validations"
    :label="$attribute->name"
/>
