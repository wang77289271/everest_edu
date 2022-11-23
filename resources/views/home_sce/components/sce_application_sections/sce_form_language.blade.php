<div class="sce_form__content">
  <h1>English Language Proficiency</h1>
  <div class="sce_application_cell">
    <label>IELTS / PTE / TOEFL <span>*</span></label>
    <select name="languageType" id="languageType" required>
      <option value="">Select type of exam</option>
      <option value="IELTS">IELTS</option>
      <option value="PTE">PTE</option>
      <option value="TOEFL">TOEFL</option>
    </select>
  </div>
  <div class="application_cell application_language">
    <div class="exam_score">
      <label>Listening<span> *</span></label>
      <input type="number" name="score_listening" required />
    </div>
    <div class="exam_score">
      <label>Speaking<span> *</span></label>
      <input type="number" name="score_speaking" required />
    </div>
    <div class="exam_score">
      <label>Writing<span> *</span></label>
      <input type="number" name="score_writing" required />
    </div>
    <div class="exam_score">
      <label>Reading<span> *</span></label>
      <input type="number" name="score_reading" required />
    </div>
  </div>
  <div className="sce_application_cell">
          <label>
            Upload your score document <span>*</span>
          </label>
          <input type="file" name="language_score" required />
        </div>
</div>
