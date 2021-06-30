<?php

namespace App\Repositories;

use App\Models\Disease as Model;

class DiseasesRepository extends CoreRepository
{

    /**
     * TeamRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function getAllDiseases()
    {
        $columns = [
            'id',
            'title',
        ];

        $result = $this
            ->model
            ->select($columns)
            ->with(['symptoms:id,title'])
            ->with(['diagnostics:id,title'])
            ->with(['faq:id,title']);

        return $result;
    }

    public function getPaginatedDiseases()
    {
        $result = $this
            ->getAllDiseases()
            ->paginate(10);

        return $result;
    }

    public function getDisease($id)
    {
        $columns = [
            'id',
            'title',
            'description',
            'symptom_desc',
            'treatment_desc',
        ];
        $result = $this
            ->model
            ->select($columns)
            ->where('id', $id)
            ->with(['symptoms:id,title'])
            ->with(['diagnostics:id,title'])
            ->with(['faq:id,title'])
            ->first();

        return $result;
    }

    public function insertDiseaseData($data, $symptoms, $diagnostics, $faq)
    {
        $result = $this->create($data);
        $result->symptoms()->sync((array)$symptoms);
        $result->diagnostics()->sync((array)$diagnostics);
        $result->faq()->sync((array)$faq);
        return $result;
    }

    public function upadateDiseaseData($id, $data, $symptoms, $diagnostics, $faq)
    {
        $faqItem = $this->find($id);
        $faqItem->update($data);
        $faqItem->symptoms()->sync((array)$symptoms);
        $faqItem->diagnostics()->sync((array)$diagnostics);
        $faqItem->faq()->sync((array)$faq);
        return $faqItem;
    }

}

